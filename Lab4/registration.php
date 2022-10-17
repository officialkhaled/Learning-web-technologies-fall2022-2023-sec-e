<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <form action="login.php" method="post">
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Name </td>
                    <td>:</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>

                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><input type="email" name="email" id=""></td>
                </tr>
                <tr>
                    <td>User Name </td>
                    <td>:</td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" id=""></td>
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
            <input type="submit" name="" id="Submit">
            <input type="reset" id="Reset">
        </fieldset>
    </form>
    </body>
</html>

<?php 

?>