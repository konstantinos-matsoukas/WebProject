	<?php 
		session_start();
				$con=mysqli_connect("localhost","root","");
				mysqli_select_db($con, "data1");
					
			$_SESSION['t']=$_POST['type'];
			$_SESSION['d']=$_POST['difficulty'];

		
				   
	?>