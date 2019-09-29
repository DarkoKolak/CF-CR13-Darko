<?php
ob_start();
session_start();
require_once 'dbconnect.php'; 
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>User Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
         <?php
          $query = "SELECT * FROM users WHERE usersId =".$_SESSION["userid"];
          $res = $conn->query($query);
          $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
         echo "<img src=".$row['image']." alt='...' width='65' class='mr-3 rounded-circle img-thumbnail shadow-sm'>";
          echo "<div class='media-body'>";
          echo "<h4 class='m-0'>"; 
          echo $row['name']; echo " "; echo $row['lastname'];
          echo "</h4>";
          echo "<p class='font-weight-light text-muted mb-0'>".$row['job']."</p>";
         ?>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="home.php" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
    </li>
    <li class="nav-item">
      <a href="addfriend.php" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Add a friend
            </a>
    </li>
    <li class="nav-item">
      <a href="friendship.php" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                See all your friends
            </a>
    </li>
    <li class="nav-item">
      <a href="request.php" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Requests
            </a>
    </li>
    <li class="nav-item">
      <a href="logout.php?logout" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Log Out
            </a>
    </li>
  </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">

</div>
<script src="javascript/js.js"></script>
<script src="jquery-3.4.1.min.js"></script>
</body>
</html>