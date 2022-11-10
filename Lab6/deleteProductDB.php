<?php

  session_start();
  $name = $_POST['name'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];
  $profit = $_POST['sellPrice'] - $_POST['buyPrice'];

  if($name == "" || $buyPrice == "" || $sellPrice == ""){
    header('location: editProduct.php?err=null');
  } else{
    $con = mysqli_connect('localhost', 'root', '', 'product_db');

    //$sql = "update products set ('{$name}', '{$buyPrice}', '{$sellPrice}', '{$profit}')";

    $sql = "DELETE FROM `products` WHERE `Name`='{$name}'";

    $status = mysqli_query($con, $sql);

    if($status) {
      header('location: products.php');
    } else {
      echo "Error";
    }
    
    
  }

?>