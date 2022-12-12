<?php

  session_start();

  /* if(!isset($_SESSION['status'])){
      header('location: login.php?err=invalid_request');
  } */

?>

<html>
<head>
  <title>Admin Home</title>
</head>
<body>
  <h1><center>Welcome Anne!</center></h1>
  <!-- <h1><center>Welcome <?php //echo "$_SESSION['user']['name']"; ?></center></h1> -->

  <center><a href="profile.php">Profile</a></center>
  <center><a href="changePass.php">Change Password</a></center>
  <center><a href="usersList.php">View Users</a></center>
  <center><a href="../controllers/logout.php">Logout</a></center>
</body>
</html>