<html>
    <head>
        <title>Change Password Form</title>
    </head>
    <body>
        <form action="login.php" method="post">
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
            <table>
                <tr>
                    <td>Current Password </td>
                    <td>:</td>
                    <td><input type="password" name="pass" value=""></td>
                </tr>
                <tr>
                    <td style="color: green;">New Password </td>
                    <td>:</td>
                    <td><input type="password" name="newPass" value=""></td>
                </tr>
                <tr>
                    <td style="color: red;">Retype New Password </td>
                    <td>:</td>
                    <td><input type="password" name="retNewPass" value=""></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td>          
                        <td><input type="submit" name="" id="Submit"></td>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    </body>
</html>


<?php 

?>