<?php

$value = $_POST["value2"];
include 'dbconnect.php';

$query= "SELECT username FROM userdata WHERE username LIKE '$value';";
$result = $conn->query($query);

if($result->num_rows > 0) {
echo "username is taken";
}
else{
echo "username is unique";
}
?>