<?php

  session_start();

  if(isset($_GET['err'])){
    if($_GET['err'] == 'invalid_request'){
        echo "invalid request error..";
    }

    if($_GET['err'] == 'null'){
        echo "null username/password";
    }
}

  /* check if user logged in */
  if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
  } else {
    header ('location: login.php');
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webtech</title>
</head>
<body>
  <h2>
    Welcome home <?php echo "$_SESSION[$username]"; ?>!
  </h2>
</body>
</html>