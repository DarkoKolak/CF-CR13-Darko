<?php 


$evalue = $_POST["value3"];
include 'dbconnect.php';


$query2 = "SELECT email FROM users WHERE email like '$evalue';";
$result2 = $conn->query($query2);

if($result2->num_rows > 0) {
echo "email is allready in our database";
}
else{
echo "email is unique";
}

 ?>