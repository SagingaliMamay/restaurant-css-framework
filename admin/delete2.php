<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "last_form";

$mysqli = new mysqli($servername,$username,$password,$dbname);
if(isset($mysqli)){
    echo "succes";
}else{
    echo "not".$mysqli->errno();
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM contact_uss WHERE id=$id") or die ($mysqli->error());
}
header('location:./read_messages.php');
?>