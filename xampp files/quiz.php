<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "data1");
		$query = mysqli_query($con,"SELECT MAX(id) as max FROM truefalse"); 
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
			$highest_id = $row['max'];
			$l=rand(0,$highest_id);

		$sql="SELECT * FROM truefalse WHERE id=".rand(0,$highest_id)." and level=1";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);

       

		  $q1=$row['question'];
		  $a1=$row['answer'];
		  $lev=$row['level'];
		  $_SESSION['q1id']=$row['id'];


		  $query = mysqli_query($con,"SELECT MAX(id) as max FROM single "); 
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
			$highest_id = $row['max'];



		$sql="SELECT * FROM single WHERE id=".rand(0,$highest_id)." and level=1";
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



		$sql="SELECT * FROM multiple WHERE id=".rand(0,$highest_id)." and level=1";
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



		  $sql="SELECT * FROM fill WHERE id=".rand(0,$highest_id)." and level=1";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
          $q4bef=$row['questionbef'];
           $q4aft=$row['questionaft'];
					 $cans=$row['answer'];
		  $blev=$row['level'];
		  $_SESSION['q3id']=$row['id'];

mysqli_close($con);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Basic Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="Style/quiz.css">
<body>
 <div class="navbar">
			  <a href="index.php">Home</a>
			  <a href="basic.html">Basics/Intro</a>
			  <a href="more.html">Advanced</a>
			  <a href="quiz.html">Basic Quiz</a>
			  <a href="login.html">Login</a>


					  <?php
					  

					  if(isset($_SESSION['variablename'])){
					    echo "<a href='landing.php'>Profile</a>";
					    echo "<a href='advanced.php'>Advanced Quiz</a>";
					    echo "<a href='extra.php'>Extra Content</a>";

					  }  
					  
					  ?>
	</div>








	
	
	<div class="banner"><h1>Quiz</h1></div>


	<form id="quiz" name="quiz" method ="post" action="results.php" >
	<div class="box">
		<p>Question 1</p>
			
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


		<p>Question 4</p>
			<label for="answer"><h6><?php echo "$q4bef" ?><input type="text" id="q4" name="q4"><?php echo "$q4aft" ?> </h6></label>

			<input type="submit" id="submit" value="Submit your Answer" onclick="results()">

  		  </div>
  			 	</form>
		<a href="landing.php">LAND</a>
		<a href="logout.php">LogOut</a>
	
</body>
</head>
</html> 

