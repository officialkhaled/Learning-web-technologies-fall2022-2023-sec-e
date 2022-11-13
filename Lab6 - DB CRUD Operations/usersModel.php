<?php

  require_once('databaseModel.php');
  session_start();

  //To check users DB to login
  function validate($username, $password){
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE username='{$username}' and password='{$password}'";

    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user != null){
      return true;
    } else{
      return false;
    }
  }

?>