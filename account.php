<?php
if (!isset($_COOKIE["blogger_email"])) {
    $msg = base64_encode("You must Login First, To View Your Account");
    header("Location:login.php?error_msg=$msg");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account | Blogger</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/account.css">
</head>
<body>

<div>

</div>
<?php
include('src/databaseConnection.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
include('nav.html');
?>

<?php
include('messageParsing.php');
?>

<table>
    <tr>

        <?php

        if ($con->error) {
            $error = "An Error occurred ";
            $con_error = $con->error;
            $error = base64_encode($error . $con_error);
            header("location:account.php?error_msg=$error");
        }
        $email = base64_decode($_COOKIE['blogger_email']);

        $sqlSelect = "SELECT * FROM `blogger_users` where `user_email` ='$email'";


        $queryResult = mysqli_query($con, $sqlSelect);
        if (mysqli_num_rows($queryResult) > 0) {
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $blogger_email = $row['user_email'];
                $blogger_name = $row['user_name'];
                $blogger_id = $row['id'];
                $image_name = $row['profile_picture'];

                $query = "SELECT COUNT(*) as `num` FROM `blogger_blogs` where `blog_author` ='$blogger_name' ";
                $query_result = mysqli_query($con, $query);

                if (mysqli_num_rows($query_result) > 0) {
                    while ($row2 = mysqli_fetch_assoc($query_result)) {
                        $total = $row2['num'];
                    }
                }

                        echo <<<END
        <td width="20%" class="account-img">
            <img src="profile_pictures/$image_name" height="100px" width="100px">
        </td>
        <td>
            <p style="color: white">Name : $blogger_name </p>
        </td>
        <td>
            <p style="color: green">Email : $blogger_email </p>
        </td>
        <td>
            <p style="color: orange">No. of Blogs : $total </p>
        </td>
        </tr>



END;


                ?>
                <?php
                echo <<<END

<tr bgcolor="green">
        <td>
            TITLE
        </td>
        <td>
            CREATED ON
        </td>
        <td>
            ACTION
        </td>
    </tr>


END;

                $query = "SELECT * FROM `blogger_blogs` where `blog_author` ='$blogger_name' ";
                $query_result = mysqli_query($con, $query);

                if (mysqli_num_rows($query_result) > 0) {
                    while ($row3 = mysqli_fetch_assoc($query_result)) {
                        $title = $row3['blog_title'];
                        $created = $row3['blog_date_created'];
                        $id = $row3['id'];


                        echo <<<END


 <tr>

        <td>
            $title
        </td>
        <td>
            $created
        </td>
        <td>
            <a style="color: white; " href="delete.php?id=$id"> DELETE</a>
        </td>
    </tr>
END;


                    }

                }
            }
        }

        ?>


</table>
</body>
</html>