<?php

  require_once('databaseModel.php');
  //require_once('crudOperations.php');
  session_start();
  
  //$id = $_POST['id'];
  $name = $_POST['name'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];
  $profit = $_POST['sellPrice'] - $_POST['buyPrice'];
  $product = ['name'=>$name, 'buyPrice'=>$buyPrice, 'sellPrice'=> $sellPrice, 'profit'=>$profit];

  if($name == "" || $buyPrice == "" || $sellPrice == ""){
    header('location: editProduct.php');
  } else{
    //Establish connection
    $con = getConnection();
    
    //Check connection
    if($con === false){
      die("ERROR: Could not connect." . mysqli_connect_error());
    }
    
    //SQL Command
    $sql = "UPDATE `products` SET `Buy_Price`='{$buyPrice}',`Sell_Price`='{$sellPrice}',`Profit`='{$profit}' WHERE `Name`='{$name}'";

    //$sql = editProd();

    $status = mysqli_query($con, $sql);

    if($status) {
      header('location: products.php');
    } else {
      echo "Error";
    }
    
  }

?>