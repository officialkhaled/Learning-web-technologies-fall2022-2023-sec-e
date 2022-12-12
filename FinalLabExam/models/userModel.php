<?php

  require_once 'db.php';

  function validateLogin($userid, $password) {
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE userid='$userid' AND password='$password'";

    $result = mysqli_query($con, $sql);
   
    $count = mysqli_num_rows($result);
    
  }

  function validateRegister($userid, $password, $cPassword, $name, $email, $usertype) {
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE userid='$userid' AND password='$password'";

   
    $result = mysqli_query($con, $sql);
   
    $count = mysqli_num_rows($result);

  
  }
?>