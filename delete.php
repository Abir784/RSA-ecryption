
<?php
session_start();
include 'db.php';
$id=$_GET['id'];
$delete_product="DELETE FROM books WHERE book_id='$id'";
$delete_product_query=mysqli_query($dbconnect,$delete_product);
$_SESSION['error_message']='Deleted Successfully';
header('location:show_books.php');





?>