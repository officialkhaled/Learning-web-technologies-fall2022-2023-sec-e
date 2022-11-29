<?php

  require_once('databaseModel.php');
  
?>

<html>
  <head>
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="products.php" method="get" enctype="multipart/form-data" style="padding: 80px; width: 400px"> 

      <fieldset style="padding: 40px">
        <legend>PRODUCTS</legend>
        <table border="1" style="border-collapse: collapse; ">
          <tr>
            <th style="padding: 15px">NAME</th>
            <th style="padding: 15px">PROFIT</th>
            <th colspan="2" style="padding: 15px">
            <button><a href="addProduct.php">ADD PRODUCTS</a></button>
          </th>
          </tr>

          <?php
            //Establish connection
            $con = getConnection();
            //SQL Command
            $sql = "select * from products";
            $result = mysqli_query($con, $sql);

            if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>{$row['Name']}</th>";
                echo "<td><center>{$row['Profit']}</center></td>";
                echo "<td><center><a href=\"editProduct.php\">Edit</a></center></td>";
                      ?>
                      <td><center><a href="products.php?delete=<?php echo $row['ID']; ?>">Delete</a></center></td>
                      <?php
                echo "</tr>";
              }
            } else {
              echo "<h2>Empty Database!</h2>";
              echo "<h3>Insert some data first.</h3>";
              
              echo "<a href=\"addProduct.php\">Add Products</a>";

            }
            
          ?>
        </table>
      </fieldset>

    </form>
  </body>
</html>

<?php

  if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM products WHERE ID = $id";
    $result = mysqli_query($con, $sql);

    if($result) {
      echo "<h2>Record deleted successfully</h2>";
      header('location: products.php');
    } else {
      echo "<h2>Error deleting record: </h2>" . mysqli_error($con);
    }

    mysqli_close($con);
  }

?>