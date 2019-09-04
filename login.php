<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Blogger</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="login">

    <div class="login-inner">
        <?php
        include('nav.html');
        ?>

        <?php
        include('messageParsing.php');
        ?>
        <form action="src/handleLogin.php" method="POST">
            <!-- <img src="login-bg.jpg" alt=""> -->
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

            <h4><input type="checkbox" name="remember"> Remember Me</h4>
            <br>
            <button type="submit" class="sc-btn"><strong>Log In</strong></button>
            <h1>OR</h1>
            <a href="createAccount.php"><h3>Create New Account</h3></a>

        </form>

    </div>
</section>

</body>
</html>