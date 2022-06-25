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
			  <a href="quiz.html">Basic Quiz</a>
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


			<h1>SCORE:</h1>
			
				<h3><?php echo $_SESSION['y']; ?></h3>

			<div class="border">
				<p><?php if(isset($_SESSION['role'])){
					echo("$n");
					echo "<br>";
					echo ("<a href='landing.php'>Profile</a>");
					
					}
				
				?></p>
			
				
			</div>

	  	
	  </div>
	</div>
</body>
</head>
</html>