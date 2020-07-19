<?php 
	//DATABASE CONNECTION BY GKM
	   include 'connection.php';
        session_start();
//DATABASE CONNECTION ENDS
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$qry=mysqli_query($con,"select * from user where username='$uname' && password='$pass'");
	if($fetch=mysqli_fetch_assoc($qry))
	{
		$_SESSION['userdata']=array($fetch['NAME'],$fetch['CONTACT'],$fetch['IMAGE']);
		$_SESSION['dat']=array($fetch['IMAGE'],$fetch['UNAME']);
		header("location:../index.php");
	}
	else
		header("location:../user/login.php?msg1=INVALID CREDENTIALS");
 ?>