<?php

  $con = mysqli_connect('localhost', 'root', '', 'product_db');


  $sql = "UPDATE `products` SET `Buying Price`='{$buyPrice}',`Selling Price`='{$sellPrice}',`Profit`='{$profit}' WHERE `Name`='{$name}'";

  $status = mysqli_query($con, $sql);


?>