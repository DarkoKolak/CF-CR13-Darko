<?php 

ob_start();
session_start();
require_once 'dbconnect.php';
include "snippet.php";

$user = $_GET["id"];

$del = "DELETE FROM request where requestfrom like ".$user." AND requestto like ".$_SESSION['userid'];
$conn->query($del);

header("Location: request.php");
 ?>