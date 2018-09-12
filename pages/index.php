<?php

global $conn;

define("SYSTEMNAME","TENPCMS1.0");

include_once('config.php');

$root = '/agr/';

$url = $_SERVER['REQUEST_URI'];
$slug = str_replace($root, "" ,$url);

define("SLUG", $slug);
define("DOMAIN", $_SERVER['HTTP_HOST']);

if (SLUG == NULL) {
    function showReviews() {
        ?>

        <?php        
    }
} 

else {
    function showReview() {
        global $conn;
        global $slug;
    
        $slugs = "SELECT a.* FROM reviews a, slugs b WHERE a.idreview = b.reviewid AND b.slug = '$slug'";
    
        $result = $conn->query($slugs);
    
        while ($row = mysqli_fetch_array($result)) {
            echo '<div id= "' . $row['idreview'] . '">';
            echo '<h1>' . $row['review_title'] . '</h1>';
            echo '<h2>' . $row['review_desc'] . '</h2>';
            echo '<p>' . $row['review_text'] . '</p>';
            echo '</div>';
        }
    }
}

function showReviews($limit) {
    global $conn;
    global $id;

    $result = mysqli_query($conn, "SELECT a.*, b.* FROM reviews a, slugs b WHERE b.reviewid = a.idreview LIMIT $limit");

    while ($row = mysqli_fetch_array($result)) {
        echo '<div class="reviews_container" id="' . $row['idreview'] . '">';
        echo '<img class="background_img" src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>';
        echo '<div class="title_div">';
        echo '<h1 class="title_review">' . $row['review_title'] . '</h1>';
        echo '</div>';
        echo '<h3 class="game_review">' . $row['review_game'] . '</h3>';
        echo '<a href="http://localhost:8080/agr/' . $row['slug'] . '"><span></span></a>';
        echo '</div>';
    }
}

include_once('review.php');
// function test() {
//     echo "test";
// }

// function create_slug($string){
//     $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
//     return $slug;
//  }
//  echo create_slug('does this thing work or not');
//  //returns 'does-this-thing-work-or-not'
?>