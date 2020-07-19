<?php 
	//DATABASE CONNECTION BY GKM
	    include 'connection.php';
        session_start();
//DATABASE CONNECTION ENDS
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$qry=mysqli_query($con,"select * from shopkeeper where username='$uname' && password='$pass'");
	if($fetch=mysqli_fetch_assoc($qry))
	{
	    $_SESSION['data']=array($fetch['username'],$fetch['password'],$fetch['name'],$fetch['shop']);
		$_SESSION['admindata']=array($fetch['name'],$fetch['phone'],$fetch['shop']);
		header("location:../admin/admin.php");
	}
	else
		header("location:../admin/login.php?msg1=INVALID CREDENTIALS");
 ?>