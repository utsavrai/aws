<?php
$db_name = "nfc";
$mysql_username = "root";
$mysql_pwd = "root";
$server_name = "127.0.0.1";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_pwd, $db_name);
if(!$conn){
	die('could not connect'.mysqli_error());
	}
	echo 'Connected successfully';
?>
