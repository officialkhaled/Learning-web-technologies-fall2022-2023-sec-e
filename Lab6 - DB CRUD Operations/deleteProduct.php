<?php

  require_once('databaseModel.php');

?>


<html>
  <head>
    <title>Delete Product</title>
  </head>
  <body>
    <form action="deleteProductDB.php" method="post" enctype="multipart/form-data" style="padding: 80px; width: 400px" > 
      <fieldset style="padding: 40px">
        <legend>DELETE PRODUCT</legend>
        <table>
          <tr>
            <?php
              //Establish connection
              $conn = getConnection();
              //SQL Command
              $sql = "select * from {$data['Name']}";
              $result = mysqli_query($conn, $sql);

              if($sql != null) {
                while($data = mysqli_fetch_assoc($result)) {
                  //print_r($data);
                  echo"<tr>
                        <th>{$data['Name']}</th>
                        <td><center>{$data['Profit']}</center></td>

                      </tr>";
                }
              } else {
                echo "<h2>Empty Database!</h2>";
              }

            ?>
          </tr>
          <!--
          <tr>
            <label for="name">Name <br></label>
            <input type="text" name="name" value=""> <br>
          </tr>
          <tr>
            <label for="buyPrice">Buying Price <br></label>
            <input type="number" name="buyPrice" value=""> <br>
          </tr>
          <tr>
            <label for="sellPrice">Selling Price <br></label>
            <input type="number" name="sellPrice" value=""> <br>
          </tr>

          <tr>
            <hr>
            <input type="submit" name="delete" value="DELETE">
          </tr>
          -->
        </table>
      </fieldset>

    </form>
  </body>
</html>