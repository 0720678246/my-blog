<?php
if(!isset($_COOKIE["blogger_login"]) || $_COOKIE["blogger_login"]="0") {
$msg = base64_encode("You must Login First, To Create a new Blog");
header("Location:login.php?error_msg=$msg");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Blog | Blogger</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/newBlog.css">
</head>
<body>
<?php
include('src/databaseConnection.php');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($con->error) {
    $error = "An Error occurred ";
    $con_error = $con->error;
    $error = base64_encode($error . $con_error);
    header("location:viewBlog.php?error_msg=$error");
}
?>

<div class="new-blog-header">
    <div class="new-blog-nav">
        <?php
        include('nav.html');
        ?>
    </div>

    <div class="body-content">
        <div class="reader">


            <?php

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sqlSelect = "SELECT * FROM `blogger_blogs` WHERE `id`='$id'";
                $queryResult = mysqli_query($con, $sqlSelect);
                if (mysqli_num_rows($queryResult) > 0) {
                    while ($row = mysqli_fetch_assoc($queryResult)) {
                        $title = $row['blog_title'];
                        $author = $row['blog_author'];
                        $body = $row['blog_body'];
                        echo <<<END
                    <h1 style="color: black">$title</h1>
                    <h4>by $author </h4>
                    <h3 style="color: black">$body</h3>
                    
                    


END;

                    }
                }
            }
            if (isset($_GET['title'])) {
                $title = $_GET['title'];
                $sqlSelect = "SELECT * FROM `blogger_blogs` WHERE `blog_title`='$title'";
                $queryResult = mysqli_query($con, $sqlSelect);
                if (mysqli_num_rows($queryResult) > 0) {
                    while ($row = mysqli_fetch_assoc($queryResult)) {
                        $title = $row['blog_title'];
                        $body = $row['blog_body'];
                        $author = $row['blog_author'];
                        echo <<<END
                    <h1 style="color: black">$title</h1>
                     <h4>by $author </h4>
                    <h3 style="color: black">$body</h3>
                    
                    


END;

                    }
                }
            }

            ?>
        </div>
    </div>
</div>
</body>
</html>