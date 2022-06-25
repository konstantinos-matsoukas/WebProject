<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "data1");
$quizp=0;

$q1=$_POST['q1'];
$temp=$_SESSION['q1id'];
		$result=mysqli_query($con,"select * from truefalse where id = '$temp'") or die("Failed to query database".mysqli_error($con));
		$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
		$an=$row['answer'];
		$points=$row['points'];

	if($q1===$an){
	
		$quizp +=$points;
	}

$q2=$_POST['question2'];
$temp=$_SESSION['q2id'];
		$result=mysqli_query($con,"select * from single where id = '$temp'") or die("Failed to query database".mysqli_error($con));
		$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
		$an=$row['answer'];
		$points=$row['points'];

	if($q2==$an){
	
		$quizp =$quizp+ $points;
	}




		 $q3a=$_POST['q3a'];
		 $q3b=$_POST['q3b'];
		 $q3c=$_POST['q3c'];
		 $q3d=$_POST['q3d'];
		
		$temp=$_SESSION['q3id'];
		$result=mysqli_query($con,"select * from multiple where id = '$temp'") or die("Failed to query database".mysqli_error($con));
		$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
		$an=$row['answer'];
		$points=$row['points'];
		$c=explode(" ",$an);
		$l=count($c);
	
	
	 $k=0;
	for($i=0;$i<=$l;$i++){
			if($q3a==$c[$i]){
				$k++;
			}
			if($q3b==$c[$i]){
				$k++;
			}
			if($q3c==$c[$i]){
				$k++;
			}
			if($q3d==$c[$i]){
				$k++;
			}
	}
		if($k===$l){
		
		$quizp +=$points;
		}


		$q4=$_POST['q4'];
	$temp=$_SESSION['q4id'];
		$result=mysqli_query($con,"select * from fill where id = '$temp'") or die("Failed to query database".mysqli_error($con));
		$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
		$an=$row['answer'];
		$points=$row['points'];
		
	

	if($q4==$an){
	
		$quizp +=$points;
	}

	if(isset($_SESSION['role'])){
		$q5=$_POST['q5'];
    	$temp=$_SESSION['q5id'];
		$result=mysqli_query($con,"select * from single where id = '$temp'") or die("Failed to query database".mysqli_error($con));
		$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
		$an=$row['answer'];
		$points=$row['points'];

		if($q5===$an){
			$quizp +=$points;
			}

	
    $_SESSION['score'] +=$quizp;
	}
	
	$_SESSION['y']=$quizp;
	header("location:show.php");












?>


