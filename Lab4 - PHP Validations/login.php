<html>

<head>
  <title>Login Form</title>
</head>

<body>
  <form method="post" action="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
    <!-- php integration for security -->
    <fieldset>
      <legend>LOGIN</legend>
      <table>
        <tr>
          <td>User Name </td>
          <td>:</td>
          <td><input type="text" name="username" value="" required></td>
        </tr>
        <tr>
          <td>Password </td>
          <td>:</td>
          <td><input type="password" name="password" value="" required></td>
      </table>
      <hr>
      <table>
        <tr><input type="checkbox">Remember Me</tr>
        <tr><br><br></tr>
        <tr>
          <td>
          <td><input type="submit" name="btn" value="Submit"></td>
          </td>
          <td><a href="#">Forgot Password?</a></td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>

</html>

<!-- PHP Integration -->

<?php

    echo "PHP VALIDATION: "; 
    echo '<br><br>';

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];


    // USERNAME VALIDATION
    if($username == "" || $password == "" ){
        echo "<h2> Validation failed: Username or Password is missing! </h2>";
    }
	else if(strlen($username)<2){
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
	
	else{
        echo "<h1> Validation Successful!  </h1>";
    }   

?>