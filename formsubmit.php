<?php 
ob_start();
session_start();
require_once 'dbconnect.php';

$emailcheck = $_POST["emailcheck"];
$image = $_POST["image"];
$date = $_POST["date"];
$job = $_POST["job"];
$password1 = $_POST["password"];
$password2 = $_POST["re_password"];
$firstname = $_POST["name"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password_first = hash('sha256' , $password1);
$password_second = hash('sha256' , $password2);

$query = "INSERT INTO `users` (`name`,`lastname`,`birthdate`,`email`,`pass`,`userrole`,`image`,`job`) VALUES  ('$firstname','$lastname','$date','$email','$password_second',0,'$image','$job');";


if ($emailcheck==="email is unique") {
		if ($password_first===$password_second) {
			$conn->query($query);
			echo "<h1> You are registered </h1>";
			header("Location:login.php");
			
		}else{
			echo "Your passwords do not match!";
		}
}else{
	echo "Your email is not unique!";
}





 ?>