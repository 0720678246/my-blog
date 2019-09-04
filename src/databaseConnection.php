<?php
    define('DB_HOST', 'localhost:3306');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'blogger');

    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if ($con -> error){
        die("An Error occurred" .$con -> error);
    }
?>