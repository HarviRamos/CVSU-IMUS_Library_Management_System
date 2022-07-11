<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cvsu_library";

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
        die("Failed to connect!" . mysqli_connect_error());
    }
?>
