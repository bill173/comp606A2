<?php

error_reporting(0);

$user = "Rafael";
$password = "";
$database = "safetrade";
$host = "localhost";

$mysqli = mysqli_connect($host, $user, $password, $database);

if ($mysqli == false){
    echo "<h2>Site is down</h2>";
    exit(0);
}

$mysqli->autocommit(true);

error_reporting(E_ALL);

?>