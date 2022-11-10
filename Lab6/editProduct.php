<html>
  <head>
    <title>Edit Product</title>
  </head>
  <body>
    <form action="editProductDB.php" method="post" enctype="multipart/form-data" style="padding: 80px; width: 400px" > 
      <fieldset style="padding: 40px">
        <legend>EDIT PRODUCT</legend>
        <table>
          <tr>
            <label for="name">Name <br></label>

            <?php

              session_start();
              $name = $_POST['name'];
              $buyPrice = $_POST['buyPrice'];
              $sellPrice = $_POST['sellPrice'];
              $profit = $_POST['sellPrice'] - $_POST['buyPrice'];

              $con = mysqli_connect('localhost', 'root', '', 'product_db');

              // Check connection
              if($con === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
              }

              $sql = "SELECT `Name`, `Buying Price`, `Selling Price`, `Profit` FROM `products` WHERE `Name`='{$name}'";

              $result = mysqli_query($con, $sql);
              $data = mysqli_fetch_assoc($result);
              echo "<tr>
                      <td>{$data['Name']}</td>
                      <td>{$data['Buying Price']}</td>
                      <td>{$data['Selling Price']}</td>
                      <td>{$data['Profit']}</td>
              </tr>";
            ?>

          </tr>

          <tr>
            <br><br>
            <h4>Input updated values <hr></h4>
          </tr>
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
            <input type="checkbox" name="display" value="display" checked> Display <br>
          </tr>
          <tr>
            <hr>
            <input type="submit" name="save" value="SAVE">
          </tr>
        </table>
      </fieldset>
    </form>
  </body>
</html>