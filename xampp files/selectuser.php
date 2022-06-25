<?php
session_start();
$id=$_POST['test'];
$_SESSION['edit']=$id;

$con=mysqli_connect("localhost","root","",);
mysqli_select_db($con, "data1");


    
    $result=mysqli_query($con,"select * from users where id = '$id'") or die("Failed to query database".mysqli_error($con));
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	
	<link rel="stylesheet" type="text/css" href="Style/profile.css">
<body>
	
		<div class="box">
		<h1> Edit Profile </h1>
	
		<form id="form" method ="post" action="adminchange.php" enctype="multipart/form-data">
			
			<label for fname>First name</label>
			<input type="text" id="fname" name="fname" placeholder=<?php echo "".$row['fname'];?>>
			<br>

			<label for lname >Last name</label>
			<input type="text" id="lname" name="lname" placeholder=<?php echo "".$row['lname'];?>>

			<br>
			<label>Date</label><br>
			<input type="date" id=date name=date value=<?php echo "".$row['age'];?>>
						
			
			<br>
  			<label for="username">Username</label><br>
			<input type="text" id="username" name="username" placeholder=<?php echo "".$row['username'];?>>

			<br>
			<label for email>Email</label><br>
			<input type="email" id="email" name="email" placeholder=<?php echo "".$row['email'];?>>


			<br>
			<label for role>Privilages</label><br>
			<input type="text" id="role" name="role" placeholder=<?php echo "".$row['role'];?>>

			
  			<input type="submit" name="insert" id="insert" value="Update" >
			

			<br>
			<a href="deleteuser.php">Delete User</a><br>
			</div>
				
		</form>
	</div>

</body>
</head>
</html>
