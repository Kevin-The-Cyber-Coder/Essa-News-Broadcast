<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "kevin_db";

$con = mysqli_connect($hostname, $username, $password, $db);
if (!$con){
	die("Connection failed");
}
?>