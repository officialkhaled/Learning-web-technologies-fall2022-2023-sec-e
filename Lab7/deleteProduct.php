<html>
  <head>
    <title>Delete Product</title>
  </head>
  <body>
    <form action="editProductDB.php" method="post" enctype="multipart/form-data" style="padding: 80px; width: 400px" > 
      <fieldset style="padding: 40px">
        <legend>DELETE PRODUCT</legend>
        <table>
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
        </table>
      </fieldset>

    </form>
  </body>
</html>