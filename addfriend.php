<?php 
ob_start();
session_start();
require_once 'dbconnect.php';
include "snippet.php";
$new = "SELECT * from users where usersId !=".$_SESSION['userid'];
$result = $conn->query($new);

echo "<div class='page-content p-5' id='content'>";
     echo"     <table class='table table-dark'>

                                  <thead>
                                    <tr>
                                      <th scope='col'>Image</th>
                                      <th scope='col'>Name</th>
                                      <th scope='col'>Last Name</th>
                                      <th scope='col'>Birth Date</th>
                                      <th scope='col'>Job</th>
                                      <th scope='col'>Friend status </th>
                                    </tr>
                                  </thead>";


            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "
                    <tbody>
                         <tr>
                           <td> <img src=" .$row['image']." alt = foto  height = 200px></td>
                             <td>" .$row['name']."</td>
                             <td> " .$row['lastname']."</td>
                             <td> " .$row['birthdate']."</td>
                             <td> " .$row['job']."</td>";
                             $test = check($row['usersId']);
                             $test2 = check2($row['usersId']);
                             if ($test) {
                               echo "<td> You are allready friends </td>";
                             }
                             elseif ($test2) {
                               echo "<td> A request is pending </td>";
                             }
                             else{
                              echo "<td> <a href='add.php?id=" .$row['usersId']."'><button type='button'>Send request</button></a></td>";
                             }

                      echo "</tr>
                    </tbody> 
                   " ;
           }};
           echo "</table>";

           echo "</div>";

 function check($var){
      $conn= new mysqli("localhost","root","","cr13_darko_kolak_people");
      $query = "SELECT * FROM friendship WHERE (user1 =".$var." AND user2 =".$_SESSION['userid'].") OR (user1 =".$_SESSION['userid']." AND user2 =".$var.")";

      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        return true;
     }else{
      return false;
     }

  }

  function check2($var){
    $conn= new mysqli("localhost","root","","cr13_darko_kolak_people");
    $query = "SELECT * FROM request where (requestfrom =".$var." AND requestto =".$_SESSION['userid'].") OR (requestfrom =".$_SESSION['userid']." AND requestto =".$var.")";
          $result = $conn->query($query);

      if ($result->num_rows > 0) {
        return true;
     }else{
      return false;
     }


  }


 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>locations</title>
  <style type="text/css">
 </head>
 <body>
 
 </body>
 </html>