<?php 

ob_start();
session_start();
require_once 'dbconnect.php';

$password1 = $_POST["password"];
$email = $_POST["email"];
$password_first = hash('sha256' , $password1);

  $res=mysqli_query($conn, "SELECT * FROM users WHERE email='$email'" );
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res);
  $_SESSION["role"] = $row['userrole'];
  $_SESSION["userid"] = $row['usersId'];

    if( $count == 1 && $row['pass']==$password_first ) {
    	if ($_SESSION['role']==0) {
    		header( "Location: home.php");
    	}
    	elseif ($_SESSION['role']==1) {
    		header( "Location: adminindex.php");
    	}
  } else {
   echo "Incorrect Credentials, Try again..." ;
  }
 ?>