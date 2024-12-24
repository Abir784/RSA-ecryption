<?php
session_start();
include 'db.php';
include 'rsa.php';

try {
    // Check if public key is provided
    if (empty($_POST['public_key'])) {
        throw new Exception('Public key is missing.');
    }

    // Encrypt data using the provided public key
    $title = rsa_encrypt($_POST['title'], $_POST['public_key']);
    $author = rsa_encrypt($_POST['author'], $_POST['public_key']);
    $genre = rsa_encrypt($_POST['genre'], $_POST['public_key']);
    $publication_year = rsa_encrypt($_POST['publication_year'], $_POST['public_key']);
    $isbn = rsa_encrypt($_POST['isbn'], $_POST['public_key']);
    $language = rsa_encrypt($_POST['language'], $_POST['public_key']);
    $total_copies = rsa_encrypt($_POST['total_copies'], $_POST['public_key']);
    $available_copies = rsa_encrypt($_POST['available_copies'], $_POST['public_key']);
    if (!$title || !$author || !$genre || !$publication_year || !$isbn || !$language || !$total_copies || !$available_copies) {
        throw new Exception('Encryption failed. Please check the public key.');
    }

    $id=$_SESSION['login_user_id'];
    $insert_query = "INSERT INTO books (title, author, genre, publication_year, isbn, language, total_copies, available_copies,added_by) VALUES ('$title', '$author', '$genre', '$publication_year', '$isbn', '$language', '$total_copies', '$available_copies','$id')";
    $insert_result = mysqli_query($dbconnect, $insert_query);

    if (!$insert_result) {
        throw new Exception('Database insertion failed: ' . mysqli_error($dbconnect));
    }

    $_SESSION['message'] = 'Data Inserted';
    header('location:add_books.php');
    exit;

} catch (Exception $e) {
    $_SESSION['message'] = 'Error: ' . $e->getMessage();
    header('location:add_books.php');
    exit;
}
?>
