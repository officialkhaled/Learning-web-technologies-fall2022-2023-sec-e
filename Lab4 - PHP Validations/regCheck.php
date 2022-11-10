<?php

echo "PHP VALIDATION: ";
echo '<br><br>';

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$date = $_POST['date'];

if ($name = "" || $email == "" || $username == "" || $password == "" || $gender == "" || $date == "") {
    header('location: registration.php?err=null');

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
