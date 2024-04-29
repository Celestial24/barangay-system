<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbname = "new";

if (!$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbname)) {

    die("failed to connect!");
}
