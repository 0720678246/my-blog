<?php
include('databaseConnection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($con->error) {
        die("An Error occurred" . $con->error);
    }
    session_start();

    $blog_title = mysqli_real_escape_string($con,$_POST['blog_title']);
    $blog_body = mysqli_real_escape_string($con,$_POST['blog_body']);
    $blog_author = $_COOKIE["blog_name"];
    $blog_author = base64_decode($blog_author);
    $blog_author = $_SESSION['blogger_name'];

    $now = new DateTime();
    $now = $now->format('Y-m-d H:i:s');

    $sql_insert = "INSERT INTO `blogger_blogs` (`id`, `blog_author`, `blog_title`, `blog_body`, `blog_date_created`) 
VALUES (NULL, '$blog_author', '$blog_title', '$blog_body', '$now')";

    if ($con->query($sql_insert) === TRUE) {
//        echo "I see you!";
        header("location:../reader.php?title=$blog_title");
    } else {
        echo "Error: " . $sql_insert . "<br>" . $con->error;
    }

}





