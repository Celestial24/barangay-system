<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbname = "brgy-system";

if (!$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbname)) {

    die("failed to connect!");
}
