<?php
require "testing.php";
$eventid = $_POST["eventid"];
$regno = "15bce1352";
     
$mysql_qry = "insert into events(eventid,regno) values ('$eventid','$regno')";
if($conn -> query($mysql_qry) == TRUE){
	$qry1 = "UPDATE manager SET ptp = ptp+1 WHERE id = '$eventid';";
	$result1 = mysqli_query($conn,$qry1);
	echo "Registered";
}else{
	echo "Error: ".$mysql_qry."<br>".$conn->error;
}
?>