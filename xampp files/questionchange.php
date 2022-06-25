<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "data1");

$id=$_SESSION['edit'];
$result=mysqli_query($con,"select * from modq where id = '$id'") or die("Failed to query database".mysqli_error($con));
 $row= mysqli_fetch_array($result,MYSQLI_ASSOC);

$q=$_POST['question'];
$an=$_POST['answer'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$a4=$_POST['a4'];
$aftergap=$_POST['aftergap'];
$level=$_POST['level'];



if($row['question']!=$q){
		$sql ="UPDATE modq SET question='$q' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}

if($row['answer']!=$an){
		$sql ="UPDATE modq SET answer='$an' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}

if($row['a1']!=$a1){
		$sql ="UPDATE modq SET a1='$a1' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}
if($row['a2']!=$a2){
		$sql ="UPDATE modq SET a2='$a2' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}

if($row['a3']!=$a3){
		$sql ="UPDATE modq SET a3='$a3' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}
if($row['a4']!=$a4){
		$sql ="UPDATE modq SET a4='$a4' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}

if($row['aftergap']!=$aftergap){
		$sql ="UPDATE modq SET aftergap='$aftergap' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}
if($row['level']!=$level){
		$sql ="UPDATE modq SET level='$level' WHERE id='$id'";
		$_SESSION['fname']=$fn;
		mysqli_query($con, $sql);
}







	header("location:moderatordash.php");




?>