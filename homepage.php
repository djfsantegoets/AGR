<!-- <?php
    include_once('Pages/index.php');
?> -->
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
                <li><a style="border-bottom: solid 3px #d81f2a" href="#">HOME</a></li>
                <li><a href="Pages/reviews.php">REVIEWS</a></li>
                <li><img id="login_avatar" src="IMG/login-avatar.svg"></li>
                <li><a href="Pages/login.php">LOGIN</a></li>
            </nav>
            <div id="slider">
                <div id="slide1"></div>
                <div id="slide2"></div>
                <div id="slide3"></div>
            </div>
        </header>
            <div id="most_popular_reviews">
                <?php
                    showReviews(2);
                ?>   
                <!-- <div id="background_img1">
                    <div class="title_div">
                        <h2>Is Team Fortress 2 still relevant?</h2>
                    </div>
                    <h3>Overwatch</h3>
                    <p class="tags"><span id="first-person">First Person</span><span id="shooter">Shooter</span><span id="online">Online</span></p>
                    <p>
                    </p>
                </div>
                <div id="background_img2">
                    <div class="title_div">
                        <h2>An eastern attempt at a western RPG</h2>
                    </div>
                    <h3>Dark Souls 3</h3>
                    <p class="tags"><span id="rpg">RPG</span><span id="coop">Co-op</span><span id="third-person">Third-Person</span><span id="pvp">PVP</span><span id="pve">PVE</span></p>
                    <p>
                    </p>
                </div>
                <div id="background_img3">
                    <div class="title_div">
                        <h2>Fortnite is a game for kids</h2>
                    </div>
                    <h3>Fortnite</h3>
                    <p class="tags"><span id="funny">Funny</span><span id="battle_royale">Battle Royale</span><span id="pvp">PVP</span><span id="shooter">Shooter</span><span id="third-person">Third-Person</span></p>
                    <p>
                    </p>
                </div>
                <div id="background_img4">
                    <div class="title_div">
                        <h2>Return of the strategic game era</h2>
                    </div>
                    <h3>Iron Harvest</h3>
                    <p class="tags"><span id="strategy">Strategy</span><span id="rts">RTS</span><span id="online">Online</span></p>
                    <p>
                    </p>
                </div> -->
            </div>  
            <div id="about_us">
                <h1>About Us</h1>
                <p>We at <span>Advanced Game Reviews</span> have been gamers since our younger days. We've always enjoyed playing video games across multiple devices and consoles.
                    We've been studying web development for a few years now, and have seen the state of video game media, reviews and all that stuff.
                    The first massive project we decided to do is "<span>Advanced Game Reviews</span>".
                </p>
                <p>
                    <span>Advanced Game Reviews</span> is all about user content. We're not being paid to review games, and neither do we want to be. We want to share honest reviews by hundreds of users.
                    So if you're sick of current gaming media, and you can't be sure which review is genuine, and you just want readable old-school reviews, then you'll fit right at home!
                </p>
                <p>
                    Why don't you create an account, and start reviewing? We're glad you've come for a visit!
                </p>

            </div>
            <div id="bio">
                <div id="bio_div1">
                    <div id="dion_santegoets">
                    
                    </div>
                    <h3>Dion Santegoets</h3>
                    <h5>Founder</h5>
                    <h4>ROC Tilburg Kasteeldreef</h4>
                    <!-- <p>One of the three founders of "<span>Advanced Game Reviews</span>".
                    "Without requirements or design, programming is the art of adding bugs to an empty text file."<br>  
                    ~Louis Srygley
                    </p>
                    <a href="www.dionsantegoets.com">My Portfolio</a> -->
                </div>
                <div id="bio_div2">
                    <div id="geert_soetens">
                
                    </div>
                    <h3>Geert Soetens</h3>
                    <h5>Founder</h5>
                    <h4>ROC Tilburg Kasteeldreef</h4>
                    <p></p>
                    <a></a>
                </div>
                <!-- <div id="bio_div3">
                    <div id="stefan_de_graaf">
                    
                    </div>
                    <h3>Stefan de Graaf</h3>
                    <h5>Founder</h5>
                    <h4>ROC Tilburg Kasteeldreef</h4>
                    <p></p>
                    <a></a>
                </div> -->
            </div>
            <div id="footer">
                <!-- <h3>Get in touch</h3>
                <p>Need help? We've got your back!
                Make sure your question is not in the FAQ first. If you're not able to find your answer there 
                please contact us using Twitter. We'll answer you as soon as possible.
                </p>
                <a href="#">Twitter</a> -->
            </div>
    </body>
</html>