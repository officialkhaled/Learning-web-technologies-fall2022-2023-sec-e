<?php

  if(isset($_POST['submit'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sth = strpos($username, "1");
    echo $sth;

    echo "\n";

    if($username == "" || $password == "") {
      header('location: login.php?err=null');
    } else if(preg_match('/^[A-Za-z0-9.-_]+$/',$username) === false) {
      echo "Username can contain alpha numeric characters, period, dash or underscore only";
    } else if(strlen($username) < 2){
        echo "Username must contain at least two (2) characters!";
    } else if(strlen($password) < 8){
        echo "Password must not be less than eight (8) characters!";
    } else if(strpos($password, "@") === false && 
      strpos($password, "#") === false && 
      strpos($password, "$") === false && 
      strpos($password, "%") === false) {
      echo "Password must contain at least one of the special characters (@, #, $, %)";
    } else {
      //echo "Valid user!";

      $user = ['username'=> $username, 'password'=> $password];
      $_SESSION['user'] = $user;
      setcookie('status', 'true', time()+3600, '/');
      header ('location: home.php');

      /*
      if ($user['usertype'] == 'admin'){
        header ('location: adminHome.php');
      } else if ($user['usertype'] == 'customer') {
        header ('location: customerHome.php');
      } 
      */
    }
  }

  


  /*
  // USERNAME VALIDATION
  if($username == "" || $password == "" ){
    echo "<h2> Validation failed: Username or Password is missing! </h2>";
  } else if(strlen($username)<2){
    echo "<h2>Validation failed: Username must be at least 2 characters long! </h2>";
  } 
  else if((substr_count($username,'@')>0) || (substr_count($username,'#')>0) || (substr_count($username,'$')>0) || (substr_count($username,'%')>0) || (substr_count($username,'/')>0) || (substr_count($username,'*')>0) || (substr_count($username,'+')>0) || (substr_count($username,'(')>0) || (substr_count($username,')')>0) || (substr_count($username,'!')>0) || (substr_count($username,'^')>0)){
    echo "<h2> Validation failed: Username can contain alpha numeric characters, period, dash or underscore only! </h2>";
  }
  
  // PASSWORD VALIDATION
  else if(strlen($password)<8){
    echo "<h2> Validation failed: Password must be at least 8 characters long! </h2>";
  } 
  else if((substr_count($password,'@')<1) && (substr_count($password,'#')<1) && (substr_count($password,'$')<1) && (substr_count($password,'%')<1)){
    echo "<h2> Validation failed: Password must contain at least one special character (@, #, $, %) </h2>";
  } 
  else if ($username == 'admin' && $password == 'admin@123'){
    //echo "<h1> Validation Successful!  </h1>";
    
    $user = ['username'=> $username, 'password'=> $password];
    $_SESSION['user'] = $user;

    header ('location: home.php');
  } 
  */
  /*
    $pattern = "/^[a-zA-Z0-9]*$/";
  
    if(preg_match($pattern, $username)) {
      die ("Invalid username");
    } else if (preg_match('/[^A-Za-z0-9]/', $password)) {
      die ("Invalid password");
    } else {
      echo "Valid username and password";
    }
  */

?>