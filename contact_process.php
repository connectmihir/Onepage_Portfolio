<?php

include 'config/db.php';

$name = $_POST['name'];//name is name attribute in html form
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


//SQL query to add data from the users to table in database.

$sql = "INSERT INTO contacts
(name,email,subject,message)
VALUES
('$name','$email','$subject','$message')";

$result= mysqli_query($conn,$sql);



?>