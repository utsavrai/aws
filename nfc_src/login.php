<?php
require "testing.php";
$username = isset($_POST["utsav27"])?$_POST["utsav27"]:"utsav27";	
$pwd = isset($_POST["123"])?$_POST["123"]:"123";
$flag = 0;
$mysql_qry = "select * from users where username like '$username' and password like '$pwd' ;";
$result = mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result) > 0){
	while($row = $result->fetch_assoc()) {
         $data = $row["regno"]. " ". $row["name"]. " " . $row["surname"] . " " .$row["branch"]. " " . $row["sem"]." ";
     }
     if($flag==0){
	$mysql_qry1 = "select regno from users where username like '$username' and password like '$pwd' ;";
	$result1 = mysqli_query($conn,$mysql_qry1);
	if(mysqli_num_rows($result1) > 0){
		while($row1 = $result1->fetch_assoc()) {
	         $data1 = $row1["regno"];
	     }
	}

	$data2 = "";
	$mysql_qry2 = "select eventid from events where regno like '$data1';";
	$result2 = mysqli_query($conn,$mysql_qry2);
	if(mysqli_num_rows($result2) > 0){
		while($row2 = $result2->fetch_assoc()) {
	         $data2 .= $row2["eventid"]. " ";
	     }
	     

	}
	$data .= $data2;
	echo $data;
}
}else{
	echo "failure";
	$flag = 1;
}

?>
