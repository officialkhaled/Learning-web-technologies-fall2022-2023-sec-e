<?php

  require_once('databaseModel.php');
  //require_once('crudOperations.php');
  session_start();

  $name = $_POST['name'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];
  $profit = $sellPrice - $buyPrice;
  $product = ['', 'name'=>$name, 'buyPrice'=>$buyPrice, 'sellPrice'=> $sellPrice, 'profit'=>$profit];

  if($name == "" || $buyPrice == "" || $sellPrice == ""){
    //header('location: addProduct.php');
    echo "<h2>Missing field(s) detected!</h2><br>";
  } else{
    $con = getConnection();
    
    // Check connection
    if($con === false){
      die("ERROR: Could not connect." . mysqli_connect_error());
    }
    /*
    $status = addProd($product);
    if($status) {
      echo "msg()";
      header('location: products.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
    */

    $sql = "INSERT into products VALUES ('', '{$name}', '{$buyPrice}', '{$sellPrice}', '{$profit}')";

    $status = mysqli_query($con, $sql);

    if($status) {
      echo "msg()";
      header('location: products.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
    
  }

?>