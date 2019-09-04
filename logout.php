<?php
session_start();

$_SESSION = array();
$cookie_expiryDate = time() - 3600;
session_destroy();


unset($_SESSION['blogger_id']);
unset($_SESSION['blogger_email']);



setcookie("blogger_email", "", $cookie_expiryDate, "/");
setcookie("blogger_id", "", $cookie_expiryDate, "/");
setcookie("blogger_login", 0, $cookie_expiryDate, "/");

$msg = base64_encode("Logout successful");
header("Location: home.php?log_msg=$msg");
?>