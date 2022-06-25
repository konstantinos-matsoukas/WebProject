<?php
session_start();
$id=$_POST['t'];
$_SESSION['edit']=$id;

$con=mysqli_connect("localhost","root","",);
mysqli_select_db($con, "data1");


    
    $result=mysqli_query($con,"select * from modq where id = '$id'") or die("Failed to query database".mysqli_error($con));
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Question</title>
	
	<link rel="stylesheet" type="text/css" href="Style/profile.css">
<body>
	
		<div class="box">
		<h1> Edit Question </h1>
	
		<form id="form" method ="post" action="questionchange.php">
			
			<label for fname>Type</label>
			<input type="text" id="type" name="type" placeholder=<?php echo "".$row['type'];?>>
			<br>

			<label for lname >Question</label>
			<input type="text" id="question" name="question" placeholder=<?php echo "".$row['question'];?>>

			<label for lname >Answer</label>
			<input type="text" id="answer" name="answer" placeholder=<?php echo "".$row['answer'];?>>

			<br>
			<label>Option 1</label><br>
			<input type="text" id='a1' name='a1' value=<?php echo "".$row['a1'];?>>

			<br>
			<label>Option 2</label><br>
			<input type="text" id='a2' name='a2' value=<?php echo "".$row['a2'];?>>

			<br>
			<label>Option 3</label><br>
			<input type="text" id='a3' name='a3' value=<?php echo "".$row['a3'];?>>

			<br>
			<label>Option 4</label><br>
			<input type="text" id='a4' name='a4' value=<?php echo "".$row['a4'];?>>
						
			
			<br>
  			<label for="username">Rest of Question (if it's fill type</label><br>
			<input type="text" id="aftergap" name="aftergap" placeholder=<?php echo "".$row['aftergap'];?>>

			


			<br>
			<label for role>Level</label><br>
			<input type="text" id="level" name="level" placeholder=<?php echo "".$row['level'];?>>

			
  			<input type="submit" name="insert" id="insert" value="Update" >
			

			<br>
			<a href="deletequestion.php">Delete Question</a><br>
			<a href="transfer.php">Add Question</a><br>
			</div>
				
		</form>
	</div>

</body>
</head>
</html>
