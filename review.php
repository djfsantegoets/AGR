<?php
    include_once('Pages/index.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AGR | Review your favorite games!</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/cssreset.css"> 
        <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css"> 
        <link rel="stylesheet" type="text/css" href="CSS/tags.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <a href="#"><img id="logo" src="IMG/logo/agr-logo-white.svg"></a>
            <nav>
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="/Pages/reviews.php">REVIEWS</a></li>
                <li><img id="login_avatar" src="IMG/login-avatar.svg"></li>
                <li><a href="Pages/login.php">LOGIN</a></li>
            </nav>
            <div id="slider">
                <div id="slide1"></div>
                <div id="slide2"></div>
                <div id="slide3"></div>
            </div>
        </header>
        <div class="review_container">
            <?php
                showReview();                
            ?> 
        </div>    
    </body>    
</html>