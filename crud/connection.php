<?php
    // error_reporting(0);                                                               
// (dont show worning text)

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "registration-form";

$connection = mysqli_connect($servername, $username, $password, $dbname);

// $mysqli = new mysqli("localhost", "root", "", "registration-form");                   (write any one  line)

if($connection)
{
    // echo "connection ok";
}
else
{
    echo  "connection failed".mysqli_connect_error();
}

?>