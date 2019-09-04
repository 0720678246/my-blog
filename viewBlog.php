<?php
if (!isset($_COOKIE["blogger_email"]) ) {
    $msg = base64_encode("You must Login First, to View Your Saved Blogs");
    header("Location:login.php?error_msg=$msg");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Blog | Blogger</title>
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/viewBlog.css">
    <link rel="stylesheet" href="css/paginate_new.css">
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

<?php
include ('src/pagination.php');
?>
<?php
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
$limit = 4;
$startpoint = ($page * $limit) - $limit;
//to make pagination
$statement = "`blogger_blogs` ORDER BY id";
?>
<section class="viewBlog">
    <div class="viewBlog-inner">
        <?php
        include('nav.html');
        ?>

        <?php
        include "messageParsing.php";
        ?>



        <table border="1" width="100%" align="center">
            <thead>
            <tr bgcolor="#009966">
                <th>AVATOR</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>DATE ADDED</th>
            </tr>
            </thead>
            <tbody>


            <?php

            $sqlSelect = "SELECT * FROM `blogger_blogs` LIMIT {$startpoint} , {$limit}";
            $queryResult = mysqli_query($con, $sqlSelect);
            if (mysqli_num_rows($queryResult) > 0) {
                while ($row = mysqli_fetch_assoc($queryResult)) {
                    $title = $row['blog_title'];
                    $author = $row['blog_author'];

                     $sqlSelectPhoto = "SELECT * FROM `blogger_users` WHERE `user_name` = '$author' ";
                     $queryResultPhoto = mysqli_query($con, $sqlSelectPhoto);
                     if (mysqli_num_rows($queryResultPhoto) > 0) {
                        while ($row45 = mysqli_fetch_assoc($queryResultPhoto)) {
                            $image = $row45['profile_picture'];
                      
                    ?>

                    <tr>
                        <td><img src="profile_pictures/<?php echo $image;?>" height="80px" width="80px" ></td>
                        <td><a style="color: white; " href="reader.php?id=<?php echo $row['id']?>">
                                <?php echo $row['blog_title']; ?> </a>  </td>
                        <td><?php echo $row['blog_author']; ?></td>
                        <td><?php echo $row['blog_date_created']; ?></td>

                    </tr>

                    <?php
                      }
                     }

                }

            } else {
                $error = "Sorry, Login unsuccessful 
                       Try again, or create an account if you don't have one";
                $con_error = $con->error;
                echo $error;
                $error = base64_encode($error . $con_error);

//        header("location:../login.php?error_msg=$error");
            }

            ?>
            </tbody>
        </table>

        <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">

            <?php

            echo studentspagination($statement,$limit,$page);

            ?>
        </div>
        <p>&nbsp;&nbsp;</p>


        </div>
</section>


</body>

</html>