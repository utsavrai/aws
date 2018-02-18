<?php
require "testing.php";
$regno = $_POST["regno"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$username = $_POST["username"];	
$password = $_POST["password"];
$branch = $_POST["branch"];
$sem = $_POST["sem"];

$mysql_qry = "insert into users(regno,name,surname,username,password,branch,sem) values ('$regno','$name','$surname','$username','$password','$branch','$sem')";
if($conn -> query($mysql_qry) == TRUE){
	echo "Registered";
}else{
	echo "Error: ".$mysql_qry."<br>".$conn->error;
}
?>