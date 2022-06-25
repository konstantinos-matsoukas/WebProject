<?php
session_start();

?>


<!DOCTYPE html>
<head>
	<title>Add Quiz Question</title>
	
		
</head>

<body>
	<link rel="stylesheet" type="text/css" href="Style/add.css">
	  <div class="navbar">
			  <a href="index.php">Home</a>
			  <a href="basic.html">Basics/Intro</a>
			  <a href="more.html">Advanced</a>
			  <a href="quiz.html">Basic Quiz</a>
			  <a href="login.html">Login</a>


					  <?php
					  

					  if(isset($_SESSION['id'])){
					    echo "<a href='landing.php'>Profile</a>";
					    echo "<a href='advanced.php'>Advanced Quiz</a>";
					    echo "<a href='extra.php'>Extra Content</a>";
					    echo "<a href='addquiz.php'>Submit A Question</a>";
					  }  
					  
					  ?>
	</div>


	<form  id="newquiz" name="newquiz" method="post" >

			<label>Select the type of question you want to create</label>
				 <select name ="type" id ='type' form="newquiz">
						<option value="tf" name="tf">True/False</option>
						<option value="multiplec" name="multiplec">Multiple choice </option>
						<option value="fill" name="fill">Fill the Gap</option>
				  </select>
				  
		

    <br><br>
    			
	

			<label>Select the difficulty of the question you want to create</label>
				 <select name ="difficulty" id ="difficulty" form="newquiz">
						<option  name="easy" value="easy">EASY</option>
						<option  name="medium" value="medium">MEDIUM</option>
						<option  name="hard" value="hard">HARD</option>
				  </select>



				  	<input type="submit" name="submit" value="Submit your Question">



				  				
				  	</form>				
	





<script type="text/javascript">


	

	
				  		form= document.getElementById('newquiz');
diff=document.getElementById('difficulty');
type=document.getElementById('type');


				  

form.addEventListener('submit',(e) =>{
	document.getElementById("tf!").style.display ="none";
    document.getElementById("multiplec!").style.display ="none";
    document.getElementById("fill!").style.display ="none";
c=0;
if(type.value==="tf"){
    
    document.getElementById("tf!").style.display = "block";
    
  
}

if(type.value==="multiplec"){
    document.getElementById("multiplec!").style.display="block";
   
   
}

if(type.value==="fill"){
    document.getElementById("fill!").style.display = "block";
   
}

  
    e.preventDefault();
    <?php 
				 
						
							
					 $_SESSION['t']=$_POST['type'];
					 $_SESSION['d']=$_POST['difficulty'];
					
						
				  ?>
 })     

				  		



				  	</script>

	

				 


			

		<div id="tf!">
			<form  id="tf" name="tf"method="post" action="sendtomod.php">
		 	
		 		<p>Input the question</p>
				<label for="questiont"><input type="text" id="questiont" name="questiont"></label>


		 		<p>Answer</p>
			<label><h4>True/False</h4></label>
			<label class="container">True
			  <input type="radio" name="radio" id="true" value="true" method="post">
			  <input type="radio" name="radio" id="false" value="false" method="post">
			 </label>

			<label class="container">False
			  
			  </label>
			  	<input type="submit" id="submit" value="Submit your Question" >
		 </form>
	</div>


			







		<div id="multiplec!">
	<form  id="multiplec" name="multiplec" method="post" action="sendtomod.php">
			
				<p>Input the question</p>
		 		<label for="questionm"><input type="text" id="questionm" name="questionm"></label>
		 		<p>Input the answers, add "+" to the correct ones</p>
		 		<label for="answer1"><input type="text" id="answer1" name="answer1"></label>
		 		<label for="answer2"><input type="text" id="answer2" name="answer2"></label>	
		 		<label for="answer3"><input type="text" id="answer3" name="answer3"></label>	
		 		<label for="answer4"><input type="text" id="answer4" name="answer4"></label>

		 		<input type="submit" id="submit" value="Submit your Question">	
	</form>
	

			</div>
			


		<div id="fill!">
	 <form id="fill" name="fill" method="post" action="sendtomod.php">
			
			
				<p>Input the question, and add "+++" where the gap is suppose to be</p>
		 		<label for="before"><input type="text" id="questionf" name="questionf"></label><label for="after">GAP<input type="text" id="after" name="after"></label>

		 		<p>Input the answer</p>
		 		<label for="answer"><input type="text" id="answerf" name="answerf"></label>
		 		<input type="submit" id="submit" value="Submit your Question">
		 	</form>
		 		
			</div>
	
	

		 
			
	<script type="text/javascript" src="Script/test.js"></script>	
	<script type="text/javascript" src="Script/setquiz.js"></script>	
	</body>

</html> 
