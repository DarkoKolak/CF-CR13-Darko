<?php 
ob_start();
session_start();
require_once 'dbconnect.php';
include "snippet.php";

$quer = "SELECT * FROM request where requestto = " .$_SESSION['userid'];

$result = $conn->query($quer);


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
                	$search = "SELECT * FROM users where usersId =" .$row['requestfrom'];
                	$result2 = $conn->query($search);
                	$row2 = $result2->fetch_assoc();
                   echo  "
                    <tbody>
                         <tr>
                           <td> <img src=" .$row2['image']." alt = foto  height = 200px></td>
                             <td>" .$row2['name']."</td>
                             <td> " .$row2['lastname']."</td>
                             <td> " .$row2['birthdate']."</td>
                             <td> " .$row2['job']."</td>
                             <td> Pending request</td>
                             <td> <a href='add1.php?id=" .$row2['usersId']."'><button type='button'>Accept</button></a></td>
                             <td> <a href='decline.php?id=" .$row2['usersId']."'><button type='button'>Decline</button></a></td>";

                      echo "</tr>
                    </tbody> 
                   " ;
           }}else {
           	echo "<tbody><td> NO requests</td><tbody>";
           };
           echo "</table>";

           echo "</div>";


 ?>