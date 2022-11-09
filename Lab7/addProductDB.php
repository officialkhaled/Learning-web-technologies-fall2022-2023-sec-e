<?php

  session_start();
  $name = $_POST['name'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];
  $profit = $_POST['sellPrice'] - $_POST['buyPrice'];

  if($name == "" || $buyPrice == "" || $sellPrice == ""){
    header('location: addProduct.php?err=null');
  } else{
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql = "insert into products values ('{$name}', '{$buyPrice}', '{$sellPrice}', '{$profit}')";
    $status = mysqli_query($con, $sql);

    if($status) {
      echo "msg()";
      header('location: addProduct.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
  }

?>