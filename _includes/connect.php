<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "bill";
$connection = mysqli_connect($host, $user, $password, $database);

if(!$connection)
{
    echo "<h1>Error in DB Connection</h1>";
    die();
}
?>