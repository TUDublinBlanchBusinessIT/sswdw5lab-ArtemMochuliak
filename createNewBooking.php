<?php 

$mid = $_POST['memberID']; 
$cid = $_POST['courtID']; 
$bd = $_POST['bookingDate']; 
$st = $_POST['startTime']; 
$et = $_POST['endTime']; 

include("dbcon.php");

$sql = "insert into booking(memberid,courtid,bookingDate,starttime,endtime) values ('$mid','$cid','$bd','$st','$et')";

echo $sql;
/*
if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

// The INSERT will fail if memberID 13 or courtID 15 are not present in the database,
// because foreign key rules require these IDs to already exist in the member and court tables



mysqli_close($conn); 
?>