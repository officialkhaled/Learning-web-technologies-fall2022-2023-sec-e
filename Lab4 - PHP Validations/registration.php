<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <form method="post" action="regCheck.php" enctype="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>> <!-- php integration for security -->
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Name </td>
                    <td>:</td>
                    <td><input type="text" name="name" value=""></td>
                </tr>

                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td>User Name </td>
                    <td>:</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password </td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="" /> Male
                        <input type="radio" name="gender" value= /> Female
                        <input type="radio" name="gender" value="" /> Other
                    </fieldset>
                </tr>
                <tr>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date">
                    </fieldset>
                </tr>
            </table>
            <hr>
            <input type="submit" name="btn" id="Submit">
            <input type="reset" id="Reset">
        </fieldset>
    </form>
    </body>
</html>

 <!-- PHP Integration -->

<?php 

  echo "PHP VALIDATION: "; 
  echo '<br><br>';

  if(isset($_GET['err'])){
    if($_GET['err'] == 'invalid_request'){
        echo "<h2> invalid request error. </h2>";
    }

    if($_GET['err'] == 'null'){
        echo "<h2> One or more field is missing! </h2>";
    }
  }


?>