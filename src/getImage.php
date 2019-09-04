<?php
define("WIDTH", "160");
define("HEIGHT", "150");
$image = $_FILES['image']['name'];
if ($image) {
    define("MAX_SIZE", "800");
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // get the original name
    $filename = stripslashes($_FILES['image']['name']);

    // get the extension of the file in a lower case format
    $extension = getExtension($filename);
    $extension = strtolower($extension);

    if (($extension != "png") && ($extension != "gif") &&
        ($extension != "jpg")) {
        $msg = base64_encode("You file extension($extension) is invalid.Valid image formats: .gif , .png and .jpg");
        header("Location: ../createAccount.php?error_msg=$msg");
        exit();
    } else {

        $size = getimagesize($_FILES['image']['tmp_name']);
        $sizekb = filesize($_FILES['image']['tmp_name']);
        $limitsize = (MAX_SIZE);
        $yoursize = ($sizekb) / 1024;
        $yours = round(($yoursize) * 1, 0, PHP_ROUND_HALF_DOWN);

        if ($sizekb > MAX_SIZE * 1024) {
            $msg = base64_encode("Image not uploaded! size is $yours KB.You have exceeded the size limit of $limitsize KB");
            header("Location: ../createAccount.php?error_msg=$msg");
            exit();
        }
        define('image_name' ,time() . '.' . $extension);
        $image_name = time() . '.' . $extension; //we will give an unique name
        $newname = '../profile_pictures/' . $image_name;
        $copied = copy($_FILES['image']['tmp_name'], $newname);

        if (!$copied) {
            $msg = base64_encode("Copying Unsuccessful.");
            header("Location: ../createAccount.php?error_msg=$msg");
            exit();
        }
        else {
            $msg = base64_encode("Copying successful.");
            header("Location: ../createAccount.php?error_msg=$msg");
        }
    }
} else {
    echo "Image not available";
}
?>


