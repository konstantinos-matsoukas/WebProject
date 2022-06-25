<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	
	<link rel="stylesheet" type="text/css" href="Style/profile.css">
<body>
	
		<div class="box">
		<h1> Edit Profile </h1>
	
		<form id="form" method ="post" action="edituser.php" enctype="multipart/form-data">
			
			<label for fname>First name</label><br>
			<input type="text" id="fname" name="fname" placeholder=<?php echo "".$_SESSION['fname'];?>>
			

			<label for lname >Last name</label><br>
			<input type="text" id="lname" name="lname" placeholder=<?php echo "".$_SESSION['lname'];?>>

			<label  passowrd >Password</label><br>
			<input type="Password" id="password" name="password" placeholder="Enter Password">

			<label for passowrd2 >Confirm Password</label><br>
			<input type="Password" id="password2" name="password2" placeholder="Confirm Password">

			<label>Date</label><br>
			<input type="date" id=date name=date value=<?php echo "".$_SESSION['age'];?>>
						
			
			
  			<label for="username">Username</label><br>
			<input type="text" id="username" name="username" placeholder=<?php echo "".$_SESSION['usr'];?>>

			<label for email>Email</label><br>
			<input type="email" id="email" name="email" placeholder=<?php echo "".$_SESSION['email'];?>>

			<div><?php
					$con=mysqli_connect("localhost","root","",);
						mysqli_select_db($con, "data1");

						$id=$_SESSION['id'];
						$sqlimg="SELECT * FROM profileimg WHERE userid='$id'";
						$resultimg=mysqli_query($con,$sqlimg);

						while($rowImg =mysqli_fetch_assoc($resultimg)){
							 if($rowImg['status']==0){
							 	echo "<img src='img/profile".$id.".jpg'>";
							 }
							 else{
							 	echo "<img src='img/profiledefault.jpg'>";
							 }
								}

								mysqli_close($con);
							?></div>

			<p>Update profile picture</p>
			<input type="file" id="image" name="image">
  			
			
  			 <div id="error"><p></p></div>

  			<input type="submit" name="insert" id="insert" value="Update" ></input>
			</a>
			</div>
				
		</form>
	</div>

</body>
</head>
</html>
