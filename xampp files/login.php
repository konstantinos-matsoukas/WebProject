<?php
session_start();
$con=mysqli_connect("localhost","root","",);
mysqli_select_db($con, "data1");


    $usr=$_POST['username'];
    $password=$_POST['password'];
    $result=mysqli_query($con,"select * from users where username = '$usr' AND password ='$password'") or die("Failed to query database".mysqli_error($con));

    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);


    if($row['username']==$usr && $row['password']==$password){

        echo "SUCCESS ".$row['fname'];
      
        $_SESSION['usr']=$row['username'];
        $_SESSION['id']=$row['id'];
        $_SESSION['fname']=$row['fname'];
        $_SESSION['lname']=$row['lname'];
        $_SESSION['email']=$row['email'];
        $_SESSION['psw']=$row['password'];
        $_SESSION['gender']=$row['gender'];
        $_SESSION['age']=$row['age'];
        $_SESSION['score']=$row['score'];
        $_SESSION['role']=$row['role'];

        $id=$row['id'];
        $sqlimg="SELECT * FROM profileimg WHERE userid='$id'";
        $resultimg=mysqli_query($con,$sqlimg);

        header("location:landing.php");
        }
        else{
            echo "fail";
             header("location:login.html");
        }

        


mysqli_close($con);


?>