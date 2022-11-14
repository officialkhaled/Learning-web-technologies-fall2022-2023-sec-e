<?php

  require_once('databaseModel.php');

  //Establish connection
  $con = getConnection();

  if("<a href=\"editProduct.php\">Edit</a>") {
    header('editProduct.php');
  } else if("<a href=\"deleteProduct.php\">Delete</a>") {
    header('deleteProductDB.php?id=$_POST['id']');
  }
  /*
  //SQL Command
  $sql = "select * from products";

  $result = mysqli_query($con, $sql);  
  
  if($sql != null) {
    while($data = mysqli_fetch_assoc($result)) {

      echo"<tr>
            <th>{$data['Name']}</th>
            <td><center>{$data['Profit']}</center></td>
            <td><a href=\"editProduct.php\">Edit</a></td>
            <td><a href=\"deleteProduct.php\">Delete</a></td>
          </tr>";
    }
  } else {
    echo "<h2>Empty Database!</h2>";
  }
  */

?>