<?php
include ('databaseConnection.php');
include ('getImage.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if ($con -> error){
        die("An Error occurred" .$con -> error);
    }
    $email = $_POST['email'];
    $userName = $_POST['userName'];

    $account_password= $_POST["password"];
    $salt1="m#";
    $salt2="r0$@?";
    $token=hash('ripemd128', "$salt1$account_password$salt2");

    $sql_insert = "INSERT INTO `blogger_users` (`user_name`, `user_email`, `user_pass` , `profile_picture`) 
                      VALUES ('$userName', '$email', '$token' , '$image_name')";

    if ($con->query($sql_insert) === TRUE) {
        $log = base64_encode("Account created. You May Proceed to Login");
        header("location:../login.php?log_msg=$log");
    }
    else {
        $error = "An Error occurred ";
        $con_error = $con->error;
        $error = base64_encode($error . $con_error);
        header("location:../createAccount.php?error_msg=$error");
    }
}
?>