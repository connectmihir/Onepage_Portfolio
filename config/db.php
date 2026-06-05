<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "onepage_portfolio";

$conn = mysqli_connect(//used to create a connection to a MySQL database.
    $host,
    $user,
    $password,
    $database
);

if(!$conn){
    die("Connection failed");//immediately stops the execution of the script and optionally displays a message.
}
?>