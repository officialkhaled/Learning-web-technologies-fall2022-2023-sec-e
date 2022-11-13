<?php

  require_once('databaseModel.php');


  function viewAllProducts(){
    $con = getConnection();
    $sql = "SELECT * FROM products";
    return $result;
  }

  function addProd($product){
    $con = getConnection();
    $sql = "INSERT into products VALUES ('', '{$name}', '{$buyPrice}', '{$sellPrice}', '{$profit}')";
    $status = mysqli_query($con, $sql);
    return $status;
  }

  function getProdById($id){
    $con = getConnection();
    $sql = "SELECT * FROM products WHERE id='{$id}'";
    $result = mysqli_query($con, $sql);
    $product = mysqli_fetch_assoc($result);
    return $product;
  }

  function editProd($product){
    $con = getConnection();
    $sql = "UPDATE `products` SET `Buying_Price`='{$buyPrice}',`Selling_Price`='{$sellPrice}',`Profit`='{$profit}' WHERE `Name`='{$name}'";
    
    if(mysqli_query($con, $sql)){
      return true;
    } else{
      return false;
    }
  }

  function deleteProd($id){
    $con = getConnection();
    $sql = "DELETE FROM `products` WHERE id='{$id}'";
    
    if(mysqli_query($con, $sql)){
      return true;
    } else{
      return false;
    }
  }


?>