 <?php
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="Style/index.css">
<body>
	
	<div class="navbar">
			  <a href="index.html">Home</a>
			  <a href="basic.html">Basics/Intro</a>
			  <a href="more.html">Advanced</a>
			  <a href="quiz.php">Basic Quiz</a>
			  <a href="login.html">Login</a>


					  <?php
					  

					  if(isset($_SESSION['role'])){
					    echo "<a href='landing.php'>Profile</a>";
					    echo "<a href='advanced.php'>Advanced Quiz</a>";
					    echo "<a href='extra.php'>Extra Content</a>";
					    echo "<a href='addquiz.php'>Submit A Question</a>";
					    $n=$_SESSION['fname'];

					  }  
					  
					  ?>
	</div>

	<div class="container">
		<div class="text">


			<h1>Welcome</h1>
			
				<h3>This is a basic beginners guide to cybersecurity</h3>

			<div class="border">
				<p><?php if(isset($_SESSION['role'])){
					echo("$n");
					echo "<br>";
					echo ("<a href='landing.php'>Profile</a>");
					echo "<br>";
					echo ("<a href='logout.php'>Log-out</a>");
					}
				else{
					echo ("<a href='login.html'>Log In</a> or <a href='sign-up.html'>Sign up</a> for more options");
				}
				?></p>
			
				
			</div>

	  	
	  </div>
	</div>
</body>
</head>
</html>