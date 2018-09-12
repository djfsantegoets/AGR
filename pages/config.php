<?php
    $conn = mysqli_connect("localhost", "root", "", "agr");

    if (!$conn) {
        die(mysqli_connect_error());
        echo "Error, unable to connect to database";
    }
?>


