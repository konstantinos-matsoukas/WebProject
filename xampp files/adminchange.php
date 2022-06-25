<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "data1");

 $fn= $_POST["fname"];
 $ln= $_POST["lname"];
 $pw= $_POST["password"];
 $dt= $_POST["date"];
 $usr= $_POST["username"];
 $e= $_POST["email"];
 $img=$_FILES["image"];
 $score=$_SESSION['score'];
 $id=$_SESSION['edit'];
 $r=$_POST['role'];


 	$result=mysqli_query($con,"select * from users where id = '$id'") or die("Failed to query database".mysqli_error($con));
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);



if(($row['fname']!=$fn)AND($fn!="")){
		$sql ="UPDATE users SET fname='$fn' WHERE id='$id'";
	
		mysqli_query($con, $sql);
}

if(($row['lname']!=$ln)AND($ln!="")){
	$sql ="UPDATE users SET lname='$ln' WHERE id='$id'";
	
	mysqli_query($con, $sql);
}

if(($row['age']!=$dt)AND($dt!="")){
	$sql ="UPDATE users SET age='$dt' WHERE id='$id'";
	
	mysqli_query($con, $sql);
}
if(($row['usr']!=$usr)AND($usr!="")){
	$sql ="UPDATE users SET username='$usr' WHERE id='$id'";
	
	mysqli_query($con, $sql);
}

if(($row['email']!=$e)AND($e!="")){
	$sql ="UPDATE users SET email='$e' WHERE id='$id'";
	
	mysqli_query($con, $sql);
}

if(($row['role']!=$r)AND($r!="")){
	$sql ="UPDATE users SET role='$r' WHERE id='$id'";

	mysqli_query($con, $sql);
}


	header("location:admindash.php");




?>
