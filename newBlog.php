<?php
if(!isset($_COOKIE["blogger_email"])) {
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
<div class="new-blog-header">
    <div class="new-blog-nav">
        <?php
        include('nav.html');
        ?>
    </div>

    <div class="body-content">
        <div class="new-blog-inner">
            <form action="src/saveBlog.php" method="post">
                <div class="div1">
                    <label>Title <input type="text" name="blog_title" size="50px" placeholder="Blog Title"></label>
                    <br>
                </div>
                <div class="div2">
                    <br>
                    <h2><label>
                            <textarea name="blog_body" rows="27" cols="60" placeholder="Blog Body"></textarea>
                        </label>
                    </h2>
                </div>

                <br>
                <button type="submit" class="new-blog-btn"><strong>Save</strong></button>

            </form>

        </div>
    </div>

</div>

<div class="home-footer">
    <?php
    include('footer.php');
    ?>
</div>

</body>
</html>