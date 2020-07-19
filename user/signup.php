<?php 
//NAVBAR BEGINS
session_start();
?>
<!DOCTYPE html>
<!-- =================================================================================================
							HEAD TAG FOR ALL NAVBAR ELEMENTS BY GAURAV KUMAR MISHRA 
==================================================================================================== -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- =================================================================================================
							ALL LINKS BY GAURAV KUMAR MISHRA 
==================================================================================================== -->
	<link rel="stylesheet" type="text/css" href="../design/bootstrap.min.css">
	<link rel="icon" type="" href="../admin/profile/default.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
<!-- =================================================================================================
							404 LINK NOT FOUND
==================================================================================================== -->
	<title>MYADMIN</title>
	<style type="text/css">
		.trans
		{
			background-color: transparent;
		}
		.disabled
		{
			color:white;
			outline:none;
			border:none; 
		}
		.disabled:hover
		{
			color:white;

		}
	</style>

</head>
<!-- =================================================================================================
								HEAD TAG ENDS
===================================================================================================-->
<!--=================================================================================================
								NAVBAR STARTED
=====================================================================================================-->
<html>
<body>
<div style="margin-bottom: 87px;">
	<nav class="navbar navbar navbar-inverse navbar-fixed-top">
		<ul class="nav navbar-inverse navbar-nav navbar-left">
				<li><a href="../"><h3><i class="fas fa-shopping-basket"></i> Orderaprons</h3></a></li> 
		</ul>
	<div class="navbar navbar-fixed-top">
	<div class="container-fluid" style="margin-top:18px;">	
		<ul  class="nav navbar-nav navbar-right">
			<li><a href="user/login.php"> LOGIN / SIGNUP </a></li>
			<li><a href="../admin/login.php" style="color: white;" class=" btn btn-danger"> &nbsp;ADMIN&nbsp; </a></li>
		</ul>
</body>
<!--=================================================================================================
								NAVBAR ENDS HERE
===================================================================================================-->
<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="../design/bootstrap.min.css">
	<style type="text/css">
		tr td
		{
			border:none !important;
		}
		table
		{
			margin-top:100px;
			margin-left:80% !important;
		}
	</style>	
</head>
<body>
	<?php if(isset($_GET['msg'])) echo "<h1>".$_GET['msg']."</h1>"; ?>
	<div class=>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xl-5">
				<form action="../process/usersignup.php" method="post" enctype="multipart/form-data" class="">
					<table class="table table-responsive table-danger">
					<div class="form-group">
						<tr>
							<td>IMAGE: </td>
							<td><input type="file" name="img" accept="image/*"></td>
						</tr>
						<tr>
							<td>NAME: </td>
							<td><input class="form-control" type="text" name="name" placeholder="Full Name" required></td>
						</tr>
						<tr>
							<td>Phone Number: </td>
							<td><input class="form-control" type="number" name="phone" required></td>
						</tr>
						<tr>
							<td>UserName: </td>
							<td><input class="form-control" type="text" name="uname" required></td>
						</tr>
						<tr>
							<td>Password: </td>
							<td><input class="form-control" type="password" name="pass" placeholder="*********" min="8" required></td>
						</tr>
						<tr>
							<td><input type="checkbox" required></td>
							<td>I agree <a href="">Terms & Conditions</a> and wish to proceed forward.</td>
						</tr>
						<tr>
							<td><button class="btn btn-danger" type="reset">CLEAR</button></td>
							<td><button class="btn btn-success" type="submit">SUBMIT</button></td>
						</tr>
					</div> 
					</table>
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>