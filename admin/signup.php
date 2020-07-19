<?php 
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
	<link rel="icon" type="" href="admin/profile/default.png">
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
<?php 
	include '../process/navbar.php';
 ?>
<!--=================================================================================================
								NAVBAR ENDS HERE
===================================================================================================-->
<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="../design/bootstrap.min.css">		
</head>
<body>
	<div class=>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xl-5">
				<form action="../process/adminsignup.php" method="post" enctype="" class="well">
					<table class="table table-responsive table-danger">
					<div class="form-group">
						<tr>
							<td>SHOP NAME : </td>
							<td><input class="form-control" type="text" name="shop" placeholder="Shop Name" required></td>
						</tr>
						<tr>
							<td>Owner's NAME : </td>
							<td><input class="form-control" type="text" name="name" placeholder="Full Name" required></td>
						</tr>
						<tr>
							<td>Phone Number : </td>
							<td><input class="form-control" type="number" name="phone" required></td>
						</tr>
						<tr>
							<td>UserName : </td>
							<td><input class="form-control" type="text" name="uname" required></td>
						</tr>
						<tr>
							<td>Password : </td>
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