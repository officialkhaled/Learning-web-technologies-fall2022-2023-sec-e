<?php


  //Establish connection
  $conn = mysqli_connect('localhost', 'root', '', 'product_db');

  //SQL Command
  $sql = "select * from products";

  $result = mysqli_query($conn, $sql);  
  
  if($sql != null) {
    while($data = mysqli_fetch_assoc($result)) {
      //print_r($data);
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


?>