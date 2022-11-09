<?php

  session_start();
  $name = $_POST['name'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];

  if($name == "" || $buyPrice == "" || $sellPrice == "") {
    header('location: addProduct.php?err=null');
  } else {
    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "insert into products values ('{$name}', '{$buyPrice}', '{$sellPrice}')";
    $status = mysqli_query($con, $sql);

    if($status) {
      header('location: products.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
  }

  

?>