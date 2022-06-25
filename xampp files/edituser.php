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
 $id=$_SESSION['id'];

 $fileName=$_FILES["image"]['name'];
 $fileTmpName=$_FILES["image"]['tmp_name'];
 $fileSize=$_FILES["image"]['size'];
 $fileError=$_FILES["image"]['error'];
 $fileType=$_FILES["image"]['type'];
 $fileExt=explode('.', $fileName);
 $fileExt2=strtolower(end($fileExt));


if(($_SESSION['fname']!=$fn)AND($fn!="")){
		$sql ="UPDATE users SET fname='$fn' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}

if(($_SESSION['lname']!=$ln)AND($ln!="")){
	$sql ="UPDATE users SET lname='$ln' WHERE id='$id'";
	$_SESSION['lname']=$ln;
	mysqli_query($con, $sql);
}

if(($_SESSION['age']!=$dt)AND($dt!="")){
	$sql ="UPDATE users SET age='$dt' WHERE id='$id'";
	$_SESSION['age']=$dt;
	mysqli_query($con, $sql);
}
if(($_SESSION['usr']!=$usr)AND($usr!="")){
	$sql ="UPDATE users SET username='$usr' WHERE id='$id'";
	$_SESSION['usr']=$usr;
	mysqli_query($con, $sql);
}

if(($_SESSION['email']!=$e)AND($e!="")){
	$sql ="UPDATE users SET email='$e' WHERE id='$id'";
	$_SESSION['email']=$e;
	mysqli_query($con, $sql);
}


if ($_SESSION['action']=='user') {
	$_SESSION['action']='temp';
	header("location:admindash.php");
}
else{
	header("location:landing.php");
}




?>
