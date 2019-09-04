<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account | Blogger</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">

</head>
<body>
<section class="about">
    <div class="about-nav">
        <?php
        include('nav.html');
        ?>

    </div>
    <div>
        <?php
        include('messageParsing.php');
        ?>
    </div>
    <div class="about-blogger">
        <h3>
            Blogger is where people meet to share their life stories
        </h3>
        <h2 class="llap">
            "A life is like a garden. Perfect moments can be had, but not preserved,
            Except in memory."
        </h2>
        <h4 class="nimoy-spock">
            -Leonard Nimoy
        </h4>


    </div>
    <div class="paramos">
        <h4>Developed by</h4>
        <h2>Alex Mwangi</h2>
        <br>
        <h4>Get My Code Snippets on Github</h4>
        <div class="github">
            <a  href="https://github.com/ParamosManuver" target="_blank"> <img src="img/icons/github-logo.png" ></a>

        </div>

        <h4>Need help? Ask me on Stack Overflow</h4>
        <a href="https://stackoverflow.com/users/5914704/paramos-manuver" target="_blank">
            <img src="img/icons/stack-overflow.png" class="overflow">
        </a>


    </div>


<!--    --><?php
//    include('footer.php');
//    ?>
</section>

</body>
</html>