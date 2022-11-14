<?php

  require_once('databaseModel.php');
  //require_once('crudOperations.php');
  session_start();

  $id = intval($_POST['id']);
  $name = $_POST['name'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];
  $profit = $_POST['sellPrice'] - $_POST['buyPrice'];

  if($name == "" || $buyPrice == "" || $sellPrice == ""){
    header('location: deleteProduct.php');
  } else{
    $con = getConnection();

    $sql = "DELETE FROM `products` WHERE `Name`='{$name}'";
    //$sql = deleteProd();

    $status = mysqli_query($con, $sql);

    if($status) {
      header('location: products.php');
    } else {
      echo "Error";
    }
  }

?>