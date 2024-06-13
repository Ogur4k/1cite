<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "default_db";

$conn = mysqli_connect($server, $username, $password, $dbname);

//$conn = new mysqli('mysql:host=147.45.251.11; port=3306; dbname=default_db', 'gen_user', '12345z12345z');

if(!$conn){
    die("Connection Fialed" .mysqli_connect_errno());
} else {
    echo "";
} ?>