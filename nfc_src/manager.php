<?php
require "testing.php";
$mysql_qry = "select * from manager";
$data = "";
$result = mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result) > 0){
	while($row = $result->fetch_assoc()) {
         $data .= $row["id"]. " ". $row["event"]. " " . $row["ptp"] . " " .$row["date"]. " " . $row["venue"]." ";
     }
 }
 echo $data;