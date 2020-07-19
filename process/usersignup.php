<?php 
//DATABASE CONNECTION BY GKM
	    include 'connection.php';
//DATABASE CONNECTION ENDS
$img=$_FILES['img'];
move_uploaded_file($img['tmp_name'],"../user/profile/".$img['name']);
$imgname=$img['name'];
$data=array($_POST['name'],$_POST['phone'],$_POST['uname'],$_POST['pass']);
$qry=mysqli_query($con,"INSERT INTO `user` (`image`, `name`, `phone`, `username`, `password`) values('$imgname','$data[0]','$data[1]','$data[2]','$data[3]')");
print_r($data);print_r($qry);
 if($qry)
 {
 	
 	header("location:../user/login.php");
 }
else
{
	header("location../user/signup.php?msg=not done");
 }
 ?>