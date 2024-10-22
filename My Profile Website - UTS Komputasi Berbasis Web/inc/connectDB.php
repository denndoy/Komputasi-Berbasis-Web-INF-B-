<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "myprofileDB";
$port       = 3308;
$connect = mysqli_connect($host, $user, $password, $database, $port);

if(!$connect) {
    die("Failed to connect to database!");
}
?>