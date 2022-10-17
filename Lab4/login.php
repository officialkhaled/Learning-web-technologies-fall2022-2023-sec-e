<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <form  method="post" action="login.php" enctype="">
        <fieldset>
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>User Name </td>
                    <td>:</td>
                    <td><input type="text" name="username" value="" required></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" value="" required></td>
            </table>
            <hr>
            <table>
                <tr><input type="checkbox">Remember Me</tr>
                <tr><br><br></tr>
                <tr>
                    <td>          
                        <td><input type="submit" name="" id="Submit"></td>
                    </td>
                    <td><a href="#">Forgot Password?</a></td>
                </tr>
            </table>
        </fieldset>
    </form>
    </body>
</html>

<?php

    echo "PHP VALIDATION: "; 
    echo "<br><br>";

    $username = $_POST ['username'];  
    $username = strlen ($_POST ["username"]);  
    $lenUname = strlen ($username);  

    $password = $_POST ['password'];

    // Username
    if ($lenUname < 2) {  
        $ErrMsg = "Username must contain at least 2 characters.";  
        echo $ErrMsg;  
    } else if ($lenUname >= 2) {
        if (!preg_match ("/^[_a-zA-z0-9-]*$/", $username)) {  
            $ErrMsg = "Username can contain alpha numeric characters, period, dash or underscore only.";  
                echo $ErrMsg;  
        } else {  
            echo "Welcome Home, Mr. ", $username;  
        }
    }
          
    

/*
    // Password
    if (!preg_match ("/^[a-zA-z0-9]*$/", $username) ) {  
        $ErrMsg = "Username can contain alpha numeric characters, period, dash or underscore only.";  
             echo $ErrMsg;  
    } else {  
        echo "Welcome Home, Mr. ", $username;  
    }
*/

?>