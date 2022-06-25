<?php
session_start();
$d=$_SESSION['d'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "data1");


		$_SESSION['d']=$_POST['difficulty'];
		$query = mysqli_query($con,"SELECT MAX(id) as max FROM truefalse"); 
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
			$highest_id = $row['max'];
			$l=rand(0,$highest_id);

		$sql="SELECT * FROM truefalse WHERE level=".$_SESSION['d']." and id=".rand(0,$highest_id)."";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
       

		  $q1=$row['question'];
		  $a1=$row['answer'];
		  $lev=$row['level'];
		  $_SESSION['q1id']=$row['id'];

	
		 $sql="SELECT * FROM truefalse WHERE level=".$_SESSION['d']." and id=".rand(0,$highest_id)." ";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
       

        $q5=$row['question'];
		  $a5=$row['answer'];
		  $lev=$row['level'];
		  $_SESSION['q5id']=$row['id'];



 

		  $query = mysqli_query($con,"SELECT MAX(id) as max FROM single "); 
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
			$highest_id = $row['max'];



		$sql="SELECT * FROM single WHERE id=".rand(0,$highest_id)." and level=".$_SESSION['d']."";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);

       


          $q2=$row['question'];
		  $a1=$row['a1'];
		  $a2=$row['a2'];
		  $a3=$row['a3'];
		  $a4=$row['a4'];
		  $aans=$row['answer'];
		  $alev=$row['level'];
		  $_SESSION['q2id']=$row['id'];



		  $query = mysqli_query($con,"SELECT MAX(id) as max FROM multiple"); 
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
			$highest_id = $row['max'];



		$sql="SELECT * FROM multiple WHERE id=".rand(0,$highest_id)." and level=".$_SESSION['d']."";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);


       
          $q3=$row['question'];
		  $b1=$row['a1'];
		  $b2=$row['a2'];
		  $b3=$row['a3'];
		  $b4=$row['a4'];
		  $bans=$row['answer'];
		  $blev=$row['level'];
		  $_SESSION['q3id']=$row['id'];


		  $query = mysqli_query($con,"SELECT MAX(id) as max FROM fill"); 
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
			$highest_id = $row['max'];



		  $sql="SELECT * FROM fill WHERE level=".$_SESSION['d']." and id=".rand(0,$highest_id)."";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
        
           $q4bef=$row['questionbef'];
           $q4aft=$row['questionaft'];
					 $cans=$row['answer'];
		  $blev=$row['level'];
		  $_SESSION['q4id']=$row['id'];





mysqli_close($con);

?>

<html>
<head>
	<title>Advanced Quiz</title>


<link rel="stylesheet" type="text/css" href="Style/quiz.css">
	</head>
<body>
	
	
	<div class="banner"><h1>Quiz</h1></div>


	<form id="quiz" name="quiz" method ="post" action="results.php" >
	<div class="box">
		<p>Question 1 <?php echo $_SESSION['q1id'] ?></p>
			
				<label><h5><?php echo "$q1" ?></h5></label>
				 <select name ="q1" id ="q1">
						<label class="container"><option value="true" name="question1">True</label></option>


						<label class="container"><option value="false" name="question1">False</label></option>
							</select>
							</div>
			
	<div class="box">

		<p>Question 2</p>

				<label><h5><?php echo "$q2" ?></label></h5>

				
	 <label class="container"><input type="radio" value='<?php echo $a1 ?>' name="question2" id="question2" checked="checked"><?php echo "$a1"?>
				  <span class="checkmark"></span>
				 </label>

				<label class="container"><input type="radio" value=' <?php echo $a2 ?>' name="question2" id="question2"> <?php echo "$a2"?>
				  <span class="checkmark"></span>
				</label>

				<label class="container"><input type="radio" value=' <?php echo $a3 ?>'name="question2" id="question2"> <?php echo "$a3" ?>
				<span class="checkmark"></span>
				</label>

				<label class="container"><input type="radio" value=' <?php echo $a4 ?>' name="question2" id="question2"> <?php echo "$a4" ?>
				 <span class="checkmark"></span>
				</label>
			
	</div>



				<div class="box">
		<p>Question 3 <?php echo $_SESSION['q3id'] ?></p>

		
				<label><h5><?php echo "$q3" ?></h5></label>

				
					<label class="container"><input type="checkbox" value='<?php echo $b1?>' name="q3a"  checked="checked"><?php echo "$b1"?>
					<span class="checkmark"></span>
					</label>

					<label class="container"><input type="checkbox"  value='<?php echo $b2?>' name="q3b" ><?php echo "$b2"?>
						<span class="checkmark"></span>
					</label>


					<label class="container"><input type="checkbox" value='<?php echo $b3?>' name="q3c" ><?php echo "$b3"?>
				 	   <span class="checkmark"></span>
					</label>

					<label class="container"><input type="checkbox" value='<?php echo $b4?>' name="q3d" ><?php echo "$b4"?>
				  		<span class="checkmark"></span>
					</label>
			
		</div>

				<div class="box">


		<p>Question 4 <?php echo $_SESSION['q4id'] ?></p>
			<label for="answer"><h6><?php echo "$q4bef" ?><input type="text" id="answer" name="answer"><?php echo "$q4aft" ?> </h6></label>

			<input type="submit" id="submit" value="Submit your Answer" onclick="results()">

  		  </div>


<div class="box">
		<p>Question 5<?php echo $_SESSION['q5id'] ?></p>
			
				<label><h5><?php echo "$q5" ?></h5></label>
				 <select name ="q5" id ="q5">
						<label class="container"><option value="true" name="question1">True</label></option>


						<label class="container"><option value="false" name="question1">False</label></option>
							</select>
							</div>




<input type="submit" name="submit" value="Submit your Question" >





  		  
  			 	</form>
		<a href="landing.php">LAND</a>
		<a href="logout.php">LogOut</a>
				  		








