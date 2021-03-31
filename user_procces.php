<?php
include("dbconnect.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$message=$_REQUEST['message'];

//Inserting data to table

$query=mysqli_query($db_connect,"INSERT INTO contact_uss(full_name,email,phone,message) VALUES ('$name','$email','$phone','$message')") or die(mysqli_error($db_connect));
mysqli_close($db_connect);

header("location:index.php?note=succes");



?>