<?php

  $host = "localhost";
  $dbuser = "root";
  $dbpassword = '';
  $dbname = 'product_db';

  function getConnection(){
    //local scope cannot use the variables, so using global(special keyword) to access the variables
    global $host;           
    global $dbuser;
    global $dbpassword;
    global $dbname;

    $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    return $con;
  }


?>