<?
/*
Database Config
*/


$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "crud";

//Create connection
$connection = mysqli_connect($server, $db_user, $db_pass, $db_name);

var_dump($connection);