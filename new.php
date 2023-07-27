<?php

    $conn = mysqli_connect("localhost", "root", "", "hotel_management") or die("Connection Failed");

    $pro_id= $_POST['pid'];
 $sql1= "SELECT * FROM `district` WHERE `province_id`='$pro_id'";
$qry1= mysqli_query($conn,$sql1);
$pic="";
// $pic .='<option value="">Select District </option>';
while($row1=mysqli_fetch_assoc($qry1)){
	$pic1 .='<option value="'. $row1['id'].'">'. $row1['name'] . '</option>';
}
echo $pic1;

$dis_id= $_POST['did'];
$sql2= "SELECT * FROM `hotel` WHERE `district_id`='$dis_id'";
$qry2= mysqli_query($conn,$sql2);
$dic1="";
// $dic1 .='<option value="" disabled>Select Hotel </option>';
while($row2=mysqli_fetch_assoc($qry2)){
	$dic1 .='<option value="'. $row2['id'].'">'. $row2['name'] . '</option>';
}
echo $dic1;
$room_id= $_POST['roomidf'];
$sql3= "SELECT * FROM `room` WHERE `hotel_id`='$room_id' And `status`= 'Available'";
$qry3= mysqli_query($conn,$sql3);
$room="";
$pricrm="";
// $dic1 .='<option value="" disabled>Select Hotel </option>';
while($row3=mysqli_fetch_assoc($qry3)){
	$room .='<option value="'. $row3['id'].'">'. $row3['name'] .'  /  '. $row3['price'] . '</option>';
	// $pricrm .='<option value="'. $row3['id'].'">'. $row3['price'] . '</option>';
}
echo $room ;
// echo $pricrm;
?>