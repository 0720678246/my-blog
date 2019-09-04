<?php
include('src/databaseConnection.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$id = $_GET['id'];
$sqlDelete = "DELETE FROM `blogger_blogs` WHERE id =$id";

if ($con->query($sqlDelete) === TRUE) {
    $log = base64_encode("Delete Successful");
    header("location:account.php?log_msg=$log");

}

else{
    $error = "Sorry, Login unsuccessful. 
                       Try again, or create an account if you don't have one";
    $con_error = $con->error;
    $error = base64_encode($error . $con_error);
    header("location:account.php?error_msg=$error");

}
?>