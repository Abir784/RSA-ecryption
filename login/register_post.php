
<?php
session_start();
include '../db.php';
include '../rsa.php';

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check_query = "SELECT * FROM user WHERE email = '$email'";
    $check_result = mysqli_query($dbconnect, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['error1'] = 'Signup failed. Email already exists.';
        header('location:signup.php'); 
        
    }else{
        $keys = generate_rsa_keys();
        $private_key=$keys['private_key'];
        $public_key=$keys['public_key'];
        $name=rsa_encrypt($name,$public_key);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO user (name,email, password) VALUES ('$name','$email', '$hashed_password')";
        $insert_result = mysqli_query($dbconnect, $insert_query);

    if ($insert_result) {
        $_SESSION['success']='Signup successful! You can now login.';
        $_SESSION['login_done']='Save your public and private keys:'.'<br>'.'Private Key:'.'<br>'.$private_key.'<br>'.'Public Key:'.'<br>'.$public_key;        
        $select_query="SELECT * FROM user WHERE email='$email'";
        $select_query_result=mysqli_query($dbconnect,$select_query);
        $after_assoc= mysqli_fetch_assoc($select_query_result);
        $_SESSION['login_user_id']=$after_assoc['id'];
        header('location:../index.php'); 
    } else {
        $_SESSION['error1'] = 'Signup failed. Error: ';
        header('location:register.php'); 
        
    }

    }

    
} else {
    header('location:register.php');
    
}
?>
