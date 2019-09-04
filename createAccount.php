<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Blogger</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="register">

    <div class="login-inner ">
        <?php
        include('nav.html');
        ?>

        <?php
        include('messageParsing.php');
        ?>
        <form action="src/handleRegistration.php" method="post" enctype="multipart/form-data">
            <label for="userName">User Name</label>
            <br>
            <input class="sc-input" autofocus type="text" id="userName" name="userName">
            <br>
            <br>
            <label for="email">Email Address</label>
            <br>
            <input class="sc-input" type="email" id="email" name="email">
            <br>
            <br>
            <label for="password">Password</label>
            <br>

            <input class="sc-input" type="password" name="password" id="password">
            <span>
                            <input type="button"
                                   onclick="if(password.type=='text')
                                        password.type='password';
                                    else password.type='text';" value="view/hide">
                        </span>
            <br>
            <br>
            <label> Profile Image </label>
            <input type="file" name="image" id="images" multiple>
            <br>
            <button type="submit" class="sc-btn"><strong>Register</strong></button>
        </form>

    </div>

</div>

</body>