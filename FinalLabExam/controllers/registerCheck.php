<?php

    session_start();

    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    $name = $_POST['name'];
    $type = $_POST['type'];


    if ($userid == "" || $password == "" || $cPassword == "" || $name = "" || $type == "") {
        header('location: register.php?err=null');

    } else {
        $user = ['name' => $name, 'email' => $email, 'username' => $username, 'password' => $password, 'gender' => $gender, 'date' => $date];
        $_SESSION['user'] = $user;
        if (strlen($username < 2)) {
            echo "<h2> Username must be at least 2 characters long! </h2>";
        } else if (strlen($username >= 2)) {
            if ((substr_count($username, '@') > 0) || (substr_count($username, '#') > 0) || (substr_count($username, '$') > 0) || (substr_count($username, '%') > 0) || (substr_count($username, '/') > 0) || (substr_count($username, '*') > 0) || (substr_count($username, '+') > 0) || (substr_count($username, '(') > 0) || (substr_count($username, ')') > 0) || (substr_count($username, '!') > 0) || (substr_count($username, '^') > 0)) {
                echo "<h2>Validation failed: Username can contain alpha numeric characters, period, dash or underscore only! </h2>";
            }
            //Incomplete
            else {

            }
        }
        header('location: login.php');
    }

?>