<?php
session_start();

if (!isset($_SESSION['id'])) {
	header('location:login.html');
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="Style/profile.css">
<body>
	
 <div class="navbar">
			  <a href="index.php">Home</a>
			  <a href="basic.html">Basics/Intro</a>
			  <a href="more.html">Advanced</a>
			  <a href="quiz.html">Basic Quiz</a>
			  <?php
			   if(isset($_SESSION['id'])){
					    echo " <a href='logout.php'>Log-out</a>";
			 	}
			 	else{
			 		echo  "<a href='login.html'>Login</a>";
			 	}
				?>

					  <?php
					  

					  if(isset($_SESSION['id'])){
					    echo "<a href='landing.php'>Profile</a>";
					    echo "<a href='advanceddiff.php'>Advanced Quiz</a>";
					    echo "<a href='more.html'>Extra Content</a>";
					    echo "<a href='addquiz.php'>Submit A Question</a>";
					  }  
					  
					  ?>
			 	}
	</div>
				
							
	
	
	

			<div class="box">
			<div class="img"><?php
					$con=mysqli_connect("localhost","root","",);
						mysqli_select_db($con, "data1");

						$id=$_SESSION['id'];
						$sqlimg="SELECT * FROM profileimg WHERE userid='$id'";
						$resultimg=mysqli_query($con,$sqlimg);

						while($rowImg =mysqli_fetch_assoc($resultimg)){
							 if($rowImg['status']==1){
							 	echo "<img src='img/profile".$id.".jpg'>";
							 	echo "<img src='img/profile".$id.".jpeg'>";
							 	

							 }
							 else{
							 	echo "<img src='img/profiledefault.jpg'>";
							 }
								}

								mysqli_close($con);
							?></div>
							

					<br><label>
					<?php
					echo "First name: ".$_SESSION['fname'];
					?><br></label>

					<label>
					<?php
					echo "Last name: ".$_SESSION['lname'];
					?><br></label>

					<label>
					<?php
					echo "Date of Birth: ".$_SESSION['age'];
					?><br></label>

					<label>
					<?php
					echo "Gender: ".$_SESSION['gender'];
					?><br></label>
					
		  			

					<?php
					echo "Username: ".$_SESSION['usr'];
					?><br></label>

					<label>
					<?php
					echo "Email: ".$_SESSION['email'];
					?><br></label>

					<label>
					<?php
					echo "ID: ".$_SESSION['id'];
					?><br></label>

					<label>
					<?php
					echo "Score: ".$_SESSION['score'];
					?><br></label>
					  <a href="logout.php">LogOut</a>
					  <a href="edit.php">Edit Profile</a>
					  <a href="quiz.php">Take QUIZ</a><br>

					  <?php
					  

					  if ($_SESSION['role']>=3){
					    echo "<a href='admindash.php'>ADMINDASH</a><br>";
					    
					  }
					  if ($_SESSION['role']>=2){
					    echo "<a href='moderatordash.php'>MODDASH</a><br>";
					    
					  }

					   echo "<a href='addquiz.php'>Submit A Question</a><br>";
					  ?>
					  
			</div>

			 

</body>
</head>
</html>

