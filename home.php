<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Blogger</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<section class="masthead">
    <div class="masthead-inner">
        <?php
        include('nav.html');
        ?>


        <div class="masthead-content">
            <?php
            include('messageParsing.php');
            ?>
            <h1>Hey!</h1>
            <div class="greeting"></div>
            <div class="today_date"></div>
            <div class="countdown"></div>
        </div>
    </div>
    <div class="home-services">
        <div class="sc-container ">
            <h2>Welcome to Blogger</h2>
            <hr>
            <p>
                <strong>Blogger </strong>is a Platform to allow you open up
                to the world with your life stories.
            </p>
            <p class="home-p">
                Let the World discover your Adventures
            </p>
            <a href="newBlog.php" class="home-btn"><strong>Create One</strong></a>
        </div>

    </div>

    <div class="home-work">
        <div class="sc-container ">
            <h2>View Blogs</h2>
                <hr>
                <p>
                    All created stories are here for you to peruse.
                </p>
                <h1>
                    "You see the future through your past"
                </h1>
                <p class="home-p">
                    See what other people are writing about their life.
                </p>
                <a href="viewBlog.php" class="home-btn"><strong>View Blogs</strong></a>
        </div>

    </div>

    <div class="home-footer">
        <?php
        include('footer.php');
        ?>
    </div>




</section>

<script src="js/clock.js"></script>
</body>

</html>