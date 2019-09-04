<?php
include ('databaseConnection.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if ($con -> error){
            $error = "An Error occurred ";
            $con_error = $con->error;
            $error = base64_encode($error . $con_error);
            header("location:../login.php?error_msg=$error");
        }
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $account_password = mysqli_real_escape_string($con,$_POST['password']);

        $salt1="m#";
        $salt2="r0$@?";
        $token=hash('ripemd128', "$salt1$account_password$salt2");
        $sqlSelect = "SELECT * FROM `blogger_users` where `user_email` ='$email' and `user_pass` = '$token' ";



        $queryResult = mysqli_query($con,$sqlSelect);
        if ( mysqli_num_rows($queryResult) > 0 ){
            while ( $row = mysqli_fetch_assoc($queryResult) ){
                $blogger_email = $row['user_email'];
                $blogger_name = $row['user_name'];
                $blogger_id = $row['id'];

                $blogger_name_encoded = base64_encode($blogger_name);
                $blogger_email_encoded = base64_encode($blogger_email);
                $blogger_id_encoded = base64_encode($blogger_id);

                session_start();
                $_SESSION['blogger_email'] = $blogger_email;
                $_SESSION['blogger_id'] = $blogger_id;
                $_SESSION['blogger_name'] = $blogger_name;

                setcookie("blogger_login", 1, time()+60*60*24*100, "/");
                setcookie("blogger_email", $blogger_email_encoded, time()+60*60*24*100, "/");
                setcookie("blogger_id", $blogger_id_encoded, time()+60*60*24*100, "/");
                setcookie("blogger_name", $blogger_name_encoded, time()+60*60*24*100, "/");

                $log = base64_encode("$blogger_name, Welcome to Blogger");
                header("location:../account.php?log_msg=$log");

            }

        }
        else {
            $error = "Sorry, Login unsuccessful. 
                       Try again, or create an account if you don't have one";
            $con_error = $con->error;
            $error = base64_encode($error . $con_error);
            header("location:../login.php?error_msg=$error");
        }
    }
?>