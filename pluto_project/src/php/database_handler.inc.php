<?php

$server_name = "localhost"; //server name
$db_username = "root";
$db_password = "";
$db_name = "users_db";

$connection = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(!$connection){
	die("Connection failed".mysqli_connect_error());
}

