<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AGR | Review your favorite games!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/cssreset.css"> 
        <link rel="stylesheet" type="text/css" href="../CSS/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="../CSS/tags.css">
        <link rel="stylesheet" type="text/css" href="../CSS/reviews.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
    </head>
    <body>
        <header>
            <img id="logo" src="../IMG/logo/agr-logo-white.svg">
            <nav>
                <li><a href="../homepage.php">HOME</a></li>
                <li><a style="border-bottom: solid 3px #d81f2a" href="">REVIEWS</a></li>
                <li><img id="login_avatar" src="../IMG/login-avatar.svg"></li>
                <li><a href="../Pages/login.php">LOGIN</a></li>
            </nav>
            <div id="slider">
                <div id="slide1"></div>
                <div id="slide2"></div>
                <div id="slide3"></div>
            </div>
        </header>
        <div id="top">
            <input id="searchbar" type="text" placeholder="Search Reviews or tags!"></input>
            <select id="sort">
                <option selected>Sort by...</option>
                <option>Date</option>
                <option>Popularity</option>
                <option>Rating</option>
            </select>
        </div>
        <div id="reviews">
            <div class="review hvr-underline-from-left" style="background-image: url('../IMG/img1.jpg')">
                <a href="review.php">
                    <h2 class="title">is team fortress 2 still relevant?</h2>
                    <h3 class="gamename">Overwatch</h3>
                    <!-- <p class="tags"><span id="first-person">First Person</span><span id="shooter">Shooter</span><span id="online">Online</span></p> -->
                </a>
            </div>
            <div class="review" style="background-image: url('../IMG/img3.jpg')">
                <div>
                    <h2 class="title">An Eastern Attempt At A Western RPG</h2>
                    <h3 class="gamename">Dark Souls 3</h3>
                    <!-- <p class="tags"><span id="rpg">RPG</span><span id="coop">Co-op</span><span id="third-person">Third-Person</span><span id="pvp">PVP</span><span id="pve">PVE</span></p> -->
                </div>
            </div>
            <div class="review" style="background-image: url('../IMG/img5.jpg')">
                <div>
                    <h2 class="title">Fortnite is a game for kids</h2>
                    <h3 class="gamename">Fortnite</h3>
                    <!-- <p class="tags"><span id="funny">Funny</span><span id="battle_royale">Battle Royale</span><span id="pvp">PVP</span><span id="shooter">Shooter</span><span id="third-person">Third-Person</span></p> -->
                </div>
            </div>
            <div class="review" style="background-image: url('../IMG/img7.jpg')">
                <div>
                    <h2 class="title">Return of the strategic game Era</h2>
                    <h3 class="gamename">Iron Harvest</h3>
                    <!-- <p class="tags"><span id="strategy">Strategy</span><span id="rts">RTS</span><span id="online">Online</span></p> -->
                </div>
            </div>
        </div>
        <div id="stopped_loading">
                <h4>
                    Whoops! Looks like the server stopped retrieving data!
                </h4>
                <h4>
                    Either you've scrolled through all the reviews (Woah!) or an error occurred!
                </h4>
                <h4>
                    Try reloading the page.
                </h4>
        </div>
    </body>
</html>