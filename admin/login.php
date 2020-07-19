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
		<ul class="nav navbar-inverse navbar-nav">
			<li><a href="../"><h3><i class="fas fa-shopping-basket"></i> Orderaprons</h3></a></li> 
		</ul>
		</nav>
	</div>
	<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../design/bootstrap.min.css">
		<style>
	    .top
	    {
	            margin-top:15%;
	            margin-left:40%;
	            
	    }
	    
	</style>
</head>
<body>
	<div>
		<div class="container">
			<div class="row top">
				<div class="col-auto-5">
					<?php 
						if (isset($_GET['msg1']))
							echo "<h2 class='h'>".$_GET['msg1']."</h2>";
					?>
					<form action="../process/adminlogin.php" method="post">
						<table>
							<div class="form-group">
								<tr>
									<td>UserName: </td>
									<td><input type="text" name="uname" class="form-control"></td>
								</tr>
								<tr>
									<td>Password: </td>
									<td><input type="password" name="pass" class="form-control"></td>
								</tr>
								<tr>
									<td><button class="btn btn-success" type="submit">Login</button></td>
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
