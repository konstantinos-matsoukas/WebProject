<?php
session_start();
$id=$_SESSION['edit'];


$con=mysqli_connect("localhost","root","",);
mysqli_select_db($con, "data1");


    
    $result=mysqli_query($con,"delete from users where id = '$id'") or die("Failed to query database".mysqli_error($con));
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
header("location:admindash.php");

?>