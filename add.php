<?php 
ob_start();
session_start();
require_once 'dbconnect.php';

$user2 = $_GET["id"];

$adding = "INSERT INTO `request` (requestfrom,requestto) VALUES (".$_SESSION['userid'].",".$user2.")";
$result = $conn->query($adding);



header("Location: addfriend.php");

 ?>