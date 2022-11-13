<?php

  require_once('databaseModel.php');
  
?>

<html>
  <head>
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="displayCheck.php" method="post" enctype="multipart/form-data" style="padding: 80px; width: 400px"> 
      <fieldset style="padding: 40px">
        <legend>PRODUCTS</legend>
        <table border="1" style="border-collapse: collapse; ">
          <tr>
            <th style="padding: 15px">NAME</th>
            <th style="padding: 15px">PROFIT</th>
          </tr>

          <?php
            //Establish connection
            $con = getConnection();
            //SQL Command
            $sql = "select * from products";
            $result = mysqli_query($con, $sql);

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

          <!--
          <td><button onclick=\"location.href='editProduct.php'\">Edit</button></td>

          <tr>
            <th style="padding: 20px">Samsung</th>
            <td style="padding: 20px; text-align:center">9000</td>
            <td style="padding: 20px"><a href="editProduct.php">Edit</a></td>
            <td style="padding: 20px"><a href="deleteProduct.php">Delete</a></td>
          </tr>
          -->
        </table>
      </fieldset>

    </form>
  </body>
</html>