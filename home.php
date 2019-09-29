<?php 

ob_start();
session_start();
require_once 'dbconnect.php';
include "snippet.php";

echo "<div class='page-content p-5' id='content'>";
echo "<h1 id='bigtext'>Welcome ".$row['name']." ".$row['lastname']."</h1> <div id='img'>";
echo "<img id='image' src=".$row['image']." alt='Here should be a foto'> </div>";






 ?>






 <!DOCTYPE html>
<html>
<head>
<title>Home</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
  #bigtext{
    text-align: center;
    color: white;
    font-size: 2vw;
  }
  #img{
    text-align: center;
    margin-top: 1vw;
  }
  #image{
    display: inline-block;
  }


</style>
</head>
<body>

</body >
</html>