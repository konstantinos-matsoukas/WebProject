<?php
session_start();
$con=mysqli_connect("localhost","root","",);
mysqli_select_db($con, "data1");

if ($_SESSION['role']<2) {
	header('location:login.php');
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>ModDash</title>

<body>
	<h1>ModDash</h1>

	<link rel="stylesheet" type="text/css" href="Style/dash.css">
	<h2>To be Approved </h2>
<table>

	<tr>
		<th>ID</th>
		<th>Type</th>
		<th>Question</th>
		<th>Answer</th>
		<th>A1</th>
		<th>A2</th>
		<th>A3</th>
		<th>A4</th>
		<th>AfterGap</th>
		<th>Level</th>
		<th></th>
		
	</tr>
	<form id="modq" method="post" action="selectquestion.php">
	<?php
	$sql="SELECT * FROM modq;"; 
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);

	if($r>0){
		while ($row=mysqli_fetch_assoc($result)) {
			
			echo "<tr><td>".$row['id']."</td><td>".$row['type']."</td><td>".$row['question']."</td><td>".$row['answer']."</td><td>".$row['a1']."</td><td>".$row['a2']."</td><td>".$row['a3']."</td><td>".$row['a4']."</td><td>".$row['aftergap']."</td><td>".$row['level']."</td><td>";
					
					
					echo "<button type='submit' name='t' value=".$row['id'].">Edit Question</button>"."</td><td>"."</td></tr>";	
				
			}
		echo "</table>";
	}
	?>
	</form>
	</table>




<h2>True False </h2>
<table>
	<tr>
		<th>ID</th>
		
		<th>Question</th>
		<th>Answer</th>
		<th>Points</th>
		<th>Level</th>
		<th></th>
		
	</tr>
	<form id="tf" value="tf" method="post" action="deletec.php">
	<?php
	$sql="SELECT * FROM truefalse;"; 
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);

	if($r>0){
		while ($row=mysqli_fetch_assoc($result)) {
			
			echo "<tr><td>".$row['id']."</td><td>".$row['question']."</td><td>".$row['answer']."</td><td>".$row['points']."</td><td>".$row['level']."</td><td>";
					
					
					echo "<button type='submit' name='tf' value=".$row['id'].">Delete</button>"."</td><td>"."</td></tr>";	
				
			}
		echo "</table>";
	}
	?>
	</form>
	</table>





<h2>Multiple Choice (Multiple Answers)</h2>
<table>
	<tr>
		<th>ID</th>
		
		<th>Question</th>
		<th>Answer</th>
		<th>A1</th>
		<th>A2</th>
		<th>A3</th>
		<th>A4</th>
		<th>points</th>
		<th>Level</th>
		<th></th>
		
	</tr>
	<form id="multi" method="post" action="deletec.php">
	<?php

	$sql="SELECT * FROM multiple;"; 
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);

	if($r>0){
		while ($row=mysqli_fetch_assoc($result)) {
			
			echo "<tr><td>".$row['id']."</td><td>".$row['question']."</td><td>".$row['answer']."</td><td>".$row['a1']."</td><td>".$row['a2']."</td><td>".$row['a3']."</td><td>".$row['a4']."</td><td>".$row['points']."</td><td>".$row['level']."</td><td>";
					
					
					echo "<button type='submit' name='sub' value=".$row['id'].">Delete</button>"."</td><td>"."</td></tr>";	
				
			}
		echo "</table>";
	}
	?>
	</form>
	</table>








	<h2>Multiple Choice (Single Answer)</h2>
<table>
	<tr>
		<th>ID</th>
		
		<th>Question</th>
		<th>Answer</th>
		<th>A1</th>
		<th>A2</th>
		<th>A3</th>
		<th>A4</th>
		<th>points</th>
		<th>Level</th>
		<th></th>
		
	</tr>
	<form id="single" method="post" action="deletec.php">
	<?php
	$sql="SELECT * FROM single;"; 
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);

	if($r>0){
		while ($row=mysqli_fetch_assoc($result)) {
			
			echo "<tr><td>".$row['id']."</td><td>".$row['question']."</td><td>".$row['answer']."</td><td>".$row['a1']."</td><td>".$row['a2']."</td><td>".$row['a3']."</td><td>".$row['a4']."</td><td>".$row['points']."</td><td>".$row['level']."</td><td>";
					
					
					echo "<button type='submit' name='sub2' value=".$row['id'].">Delete</button>"."</td><td>"."</td></tr>";	
				
			}
		echo "</table>";
	}
	?>
	</form>
	</table>



	<h2>Fill the Gap</h2>
<table>
	<tr>
		<th>ID</th>
		
		<th>Before Gap</th>
		<th>Answer</th>
		<th>After Gap</th>
		<th>points</th>
		<th>Level</th>
		<th></th>
		
	</tr>
	<form id="fill" method="post" action="deletec.php">
	<?php
	$sql="SELECT * FROM fill;"; 
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);

	if($r>0){
		while ($row=mysqli_fetch_assoc($result)) {
			
			echo "<tr><td>".$row['id']."</td><td>".$row['questionbef']."</td><td>".$row['answer']."</td><td>".$row['questionaft']."</td><td>".$row['points']."</td><td>".$row['level']."</td><td>";
					
					
					echo "<button type='submit' name='sub3' value=".$row['id'].">Delete</button>"."</td><td>"."</td></tr>";	
				
			}
		echo "</table>";
	}
	?>
	</form>
	</table>
<script type="text/javascript">
	function del(){
		
			 window.location.href = 'landing.php';
		    return 1;
			
	}

</script>









</body>
</head>
</html> 