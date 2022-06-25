 <?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "data1");

	

	$type=$_SESSION['t'];
	echo $type;
				

			$diff1=$_SESSION['d'];
			if($diff1="easy"){
				$diff=1;
			}
			if($diff1="medium"){
				$diff=2;
			}
			if($diff1="hard"){
				$diff=3;
			}


		//SECTION FOR TRUE FALSE
		if($_SESSION['t']=='tf'){
			$q=$_POST['questiont'];
			$answer=$_POST['radio'];

			
			$sql="INSERT INTO modq (type,question, answer, level) 
					VALUES ('truefalse','$q', '$answer','$diff')";
                    mysqli_query($con,$sql);

		}

			
	

		//SECTION FOR MULTIPLE CHOICE WITH SINGLE OR MULTIPLE ANSWER
		if($type==='multiplec'){
			$q=$_POST['questionm'];
			$answer1=$_POST['answer1'];
			$answer2=$_POST['answer2'];
			$answer3=$_POST['answer3'];
			$answer4=$_POST['answer4'];
		    $count=0;
		    $answerfin='';
			if(strpos($answer1,"+")!=0){
			$answerfin=$answerfin.','.trim($answer1,"++");	
			$count++;
			
			}
			if(strpos($answer2,"+")!=0){
			$answerfin=$answerfin.','.trim($answer2,"++");
			$count++;
			
			}
			if(strpos($answer3,"+")!=0){
			$answerfin=$answerfin.','.trim($answer3,"++");
			$count++;
			
			}
			if(strpos($answer4,"+")!=0){
			$answerfin=$answerfin.','.trim($answer4,"++");
			$count++;
			
			}
			$answerfin=trim($answerfin,",");
			if ($count==1) {
				$sql="INSERT INTO modq (type,question, answer,a1, a2, a3, a4, level) 
					VALUES ('single','$q', '$answerfin','$answer1', '$answer2', '$answer3', '$answer4', '$diff')";
                    mysqli_query($con,$sql);
 			
			}
			if($count>1){
				$sql="INSERT INTO modq (type,question, answer,a1, a2, a3, a4, level) 
					VALUES ('multiple','$q', '$answerfin','$answer1', '$answer2', '$answer3', '$answer4', '$diff')";
                    mysqli_query($con,$sql);
 			
			}
 			

		}
			//CHECK IF A STRING HAS +
			//CHECK THE DATABASEE AND DO INSERT UGA BUNGA
		if($_SESSION['t']==='fill'){
			$before=$_POST['questionf'];
			$after=$_POST['after'];
			$answer=$_POST['answerf'];


			$sql="INSERT INTO modq (type,question, answer, aftergap,  level) 
					VALUES ('fill','$before','$answer','$after','$diff')";
                    mysqli_query($con,$sql);
			}

			mysqli_close($con);
		
		header("location:Thankyou.html");
	?>
