<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "data1");


 $fn= $_POST["fname"];
 $ln= $_POST["lname"];
 $pw= $_POST["password"];
 $dt= $_POST["date"];
 $usr= $_POST["username"];
 $e= $_POST["email"];
 $gen=$_POST["radio"];
 $img=$_FILES["image"];

 $fileName=$_FILES["image"]['name'];
 $fileTmpName=$_FILES["image"]['tmp_name'];
 $fileSize=$_FILES["image"]['size'];
 $fileError=$_FILES["image"]['error'];
 $fileType=$_FILES["image"]['type'];
 $fileExt=explode('.', $fileName);
 $fileExt2=strtolower(end($fileExt));


$query=mysqli_query($con,"SELECT * FROM users WHERE username='$usr'");
$row2= mysqli_fetch_array($query,MYSQLI_ASSOC);

if ($row2 != 0)
   {
        echo "Username already exists";
        header('location:sign-up.html');
    }
else{



$sql="INSERT INTO users (fname, lname, password, gender, email, age, pic, username, score,role) 
					VALUES ('$fn', '$ln', '$pw', '$gen', '$e', '$dt', '$fileDest', '$usr', 0,1)";


mysqli_query($con,$sql);

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
$tmp=mysqli_query($con,"SELECT * FROM users WHERE username='$usr' AND fname='$fn'");
$row= mysqli_fetch_array($tmp,MYSQLI_ASSOC);

if($row['username']==$usr){
    
        $userid=$row['id'];
}

$sqlimg="INSERT INTO profileimg (userid,status) 
                        VALUES('$userid',1)";                                              

mysqli_query($con,$sqlimg);
 
 $fileNameNew="profile".$userid.".".$fileExt2;
 $fileDest='img/'.$fileNameNew;
 move_uploaded_file($fileTmpName,$fileDest);
if($fileName==""){
        $sql3="UPDATE profileimg SET status=0 WHERE userid='$userid'";
        $result2=mysqli_query($con,$sql3);
 }



mysqli_close($con);

header("location:login.html");
}
?>