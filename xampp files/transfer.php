<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "data1");



 $id=$_SESSION['edit'];

        

 $result=mysqli_query($con,"select * from modq where id = '$id'") or die("Failed to query database".mysqli_error($con));
 $row= mysqli_fetch_array($result,MYSQLI_ASSOC);


        if ($row['level']==1) {
           
            $points=5;
        }
        if ($row['level']==2) {
           
            $points=10;
        }
        if ($row['level']==3) {
          
            $points=15;
        }
$level=$row['level'];
$q=$row['question'];
$a=$row['answer'];
 if($row['type']=='truefalse'){
    $sql="INSERT INTO truefalse (question, answer, points, level) 
                    VALUES ('$q', '$a', '$points','$level')";
                    mysqli_query($con,$sql);
}


//SECTION FOR MULTIPLE CHOICE WITH SINGLE OR MULTIPLE ANSWER
        if($row['type']=='multiple'){
            $q=$row['question'];
            $answer1=$row['a1'];
            $answer2=$row['a2'];
            $answer3=$row['a3'];
            $answer4=$row['a4'];
            $answerfin=$row['answer'];
            
            $sql="INSERT INTO multiple (question, answer, points, level, a1, a2, a3, a4) 
                    VALUES ('$q', '$answerfin', '$points', '$diff', '$answer1', '$answer2', '$answer3', '$answer4')";
                    mysqli_query($con,$sql);
                }
        if($row['type']=='single'){
            $q=$row['question'];
            $answer1=$row['a1'];
            $answer2=$row['a2'];
            $answer3=$row['a3'];
            $answer4=$row['a4'];
            $answerfin=$row['answer'];
            
            $sql="INSERT INTO multiple (question, answer, points, level, a1, a2, a3, a4) 
                    VALUES ('$q', '$answerfin', '$points', '$diff', '$answer1', '$answer2', '$answer3', '$answer4')";
                    mysqli_query($con,$sql);

                }
            
          if($row['type']=='fill'){
            $before=$row['question'];
            $after=$row['aftergap'];
            $answer=$row['answer'];


            $sql="INSERT INTO fill (questionbef, answer, questionaft, points, level) 
                    VALUES ('$before', '$answer','$after', '$points', '$diff')";
                    mysqli_query($con,$sql);
            }

           

            mysqli_close($con); 
             header('location:deletequestion.php');

                ?>