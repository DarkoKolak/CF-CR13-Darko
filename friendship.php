<?php 
ob_start();
session_start();
require_once 'dbconnect.php';
include "snippet.php";
$query = "SELECT * FROM friendship WHERE (user2 like ".$_SESSION['userid'].") OR (user1 like " .$_SESSION['userid'].")";
$result = $conn->query($query);

echo "<div class='page-content p-5' id='content'>";
     echo"     <table class='table table-dark'>

                                  <thead>
                                    <tr>
                                      <th scope='col'>Image</th>
                                      <th scope='col'>Name</th>
                                      <th scope='col'>Last Name</th>
                                      <th scope='col'>Birth Date</th>
                                      <th scope='col'>Job</th>
                                    </tr>
                                  </thead>";
 if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                	$search = "SELECT * FROM users where usersId = " .$row['user1']." or usersId = ".$row['user2'];
                	$result2 = $conn->query($search);
                	while($row2 = $result2->fetch_assoc()){
                		if ($row2['usersId']==$_SESSION['userid']) {
                			continue;
                		}else{
                   echo  "
                    <tbody>
                         <tr>
                           <td> <img src=" .$row2['image']." alt = foto  height = 200px></td>
                             <td>" .$row2['name']."</td>
                             <td> " .$row2['lastname']."</td>
                             <td> " .$row2['birthdate']."</td>
                             <td> " .$row2['job']."</td>";

                      echo "</tr>
                    </tbody> 
                   ";
               }
           }}}else {
           	echo "<tbody><td> NO requests</td><tbody>";
           };
           echo "</table>";

           echo "</div>";

 ?>