<?php
session_start();
include 'db.php';
include 'rsa.php';

try {
    if (empty($_POST['private_key'])) {
        throw new Exception('Private key is missing.');
    }

    $private_key = $_POST['private_key'];
    $id=$_SESSION['login_user_id'];
    $query = "SELECT * FROM books WHERE added_by='$id'";
    $result = mysqli_query($dbconnect, $query);
    if (!$result) {
        throw new Exception('Failed to retrieve data: ' . mysqli_error($dbconnect));
    }
  

    $decrypted_data=[];   
    foreach($result as $key=>$row){
        
        $title=rsa_decrypt($row['title'],$private_key);
        $author = rsa_decrypt($row['author'],$private_key);
        $publication_year = rsa_decrypt($row['publication_year'], $private_key);
        $total_copies = rsa_decrypt($row['total_copies'], $private_key);
        $available_copies = rsa_decrypt($row['available_copies'],$private_key);
        $genre=rsa_decrypt($row['genre'],$private_key);
        $language=rsa_decrypt($row['language'],$private_key);
        $isbn=rsa_decrypt($row['isbn'],$private_key); 

        $decrypted_data[$key]=[
            'book_id'=>$row['book_id'],
            'title'=>$title,
            'author'=>$author,
            'genre'=>$genre,
            'publication_year'=>$publication_year,
            'isbn'=>$isbn,
            'language'=>$language,
            'total_copies'=>$total_copies,
            'available_copies'=>$available_copies,
        ];
    }

    $query = "SELECT name FROM user WHERE id='$id'";
    $result = mysqli_query($dbconnect, $query);
    $name=mysqli_fetch_assoc($result)['name'];
    $decrypted_name=rsa_decrypt($name,$private_key);
    $_SESSION['name']=$decrypted_name;
    $_SESSION['decrypted_data'] = $decrypted_data;
    header('Location:show_books.php');
    exit;

} catch (Exception $e) {
    session_start();
    $_SESSION['error_message'] = $e->getMessage();
    header('Location:show_books.php');
    exit;
}
?>
