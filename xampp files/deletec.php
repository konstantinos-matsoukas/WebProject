<?php
session_start();
$con=mysqli_connect("localhost","root","",);
mysqli_select_db($con, "data1");

 if(($id1=$_POST['tf'])!=null){

    $result=mysqli_query($con,"delete from truefalse where id = '$id1'") or die("Failed to query database".mysqli_error($con));
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
	header("location:moderatordash.php");

 }
 if(($id2=$_POST['sub'])!=null){

    $result=mysqli_query($con,"delete from multiple where id = '$id2'") or die("Failed to query database".mysqli_error($con));
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
	header("location:moderatordash.php");

 }
 if(($id3=$_POST['sub2'])!=null){

    $result=mysqli_query($con,"delete from single where id = '$id3'") or die("Failed to query database".mysqli_error($con));
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
	header("location:moderatordash.php");

 }
if(($id4=$_POST['sub2'])!=null){

    $result=mysqli_query($con,"delete from fill where id = '$id4'") or die("Failed to query database".mysqli_error($con));
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
	header("location:moderatordash.php");

 }





?>