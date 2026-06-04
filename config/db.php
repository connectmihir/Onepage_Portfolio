<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "onepage_portfolio";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$conn){
    die("Connection failed");
}
?>