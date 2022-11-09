<html>
  <head>
    <title>Add Product</title>
  </head>
  <body>
    <form action="addProductDB.php" method="post" enctype="multipart/form-data" style="padding: 80px"> 
      <fieldset style="padding: 40px">
        <legend>ADD PRODUCT</legend>
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
            <input type="checkbox" name="display"> Display <br>
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