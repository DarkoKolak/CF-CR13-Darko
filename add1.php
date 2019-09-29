<?php 
ob_start();
session_start();
require_once 'dbconnect.php';
include "snippet.php";

$user = $_GET["id"];

$get = "INSERT INTO friendship (user1,user2) VALUES(".$user.",".$_SESSION['userid'].")";

$result = $conn->query($get);

$del = "DELETE FROM request where requestfrom like ".$user." AND requestto like ".$_SESSION['userid'];
$conn->query($del);

header("Location: request.php");

 ?>