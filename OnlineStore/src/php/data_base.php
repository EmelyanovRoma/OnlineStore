<?php

$server_name = "localhost";
$user_name = "root";
$pass = "";
$db_name = "Online Store";

$connection = mysqli_connect($server_name, $user_name, $pass, $db_name);

if(!$connection){
	die("Connection Failed". mysqli_connect_error());
} 
?>