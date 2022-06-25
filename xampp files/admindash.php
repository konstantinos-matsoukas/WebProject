<?php
session_start();
$con=mysqli_connect("localhost","root","",);
mysqli_select_db($con, "data1");

if ($_SESSION['role']!=3) {
	header('location:login.php');
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>AdminDash</title>

<body>
	<link rel="stylesheet" type="text/css" href="Style/dash.css">
<table>
	<tr>
		<th>Id </th>
		<th>First Name </th>
		<th>Last Name </th>
		<th>Password </th>
		<th>Gender </th>
		<th>Age </th>
		<th>username </th>
		<th>Score </th>
		<th>Role </th>
		<th></th>
		
	</tr>
	<form id="user" method="post" action="selectuser.php">
	<?php
	$sql="SELECT * FROM users;"; 
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);

	if($r>0){
		while ($row=mysqli_fetch_assoc($result)) {
			
			echo "<tr><td>".$row['id']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['password']."</td><td>".$row['gender']."</td><td>".$row['age']."</td><td>".$row['username']."</td><td>".$row['score']."</td><td>".$row['role']."</td><td>";
					
					
					echo "<button type='submit' name='test' value=".$row['id'].">EDIT USER</button>"."</td><td>"."</td></tr>";	
				
			}
		echo "</table>";
	}
	?>
	</form>
	</table>
</body>
</head>
</html> 
