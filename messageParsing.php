<?php

if (isset($_GET['error_msg'])) {
    $msg =base64_decode($_GET['error_msg']);
    echo "<div class=\"error-msg\">$msg</div>";
}
if (isset($_GET['log_msg'])) {
    $msg =base64_decode($_GET['log_msg']);
    echo "<div class=\"log-msg\">$msg</div>";
}

?>
