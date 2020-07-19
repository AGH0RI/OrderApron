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
<?php 
include '../process/navbar.php';
 ?><!--=================================================================================================
								NAVBAR ENDS HERE
===================================================================================================-->
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../design/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="container-fluid">
			<div class="row">
				<div class="col-auto-5">
					<?php 
						if (isset($_GET['msg1']))
							echo "<h2>".$_GET['msg1']."</h2>";
					?>
					<div style="margin-left:33%;margin-top:60pt;width:40%;">
					<form action="../process/userlogin.php" method="post">
						<div class="pannel form-group">
								<div class="panel-heading">
									<img class="img-thumbnail" height="200px" width="250px" src="<?php if(isset($_SESSION['dat'])) echo "../profile/".$_SESSION['dat'][0];
									else echo "../profile/default.png"; ?>">
								</div>
								<div class="panel-body">
									<h4><strong><?php if(isset($_SESSION['dat'])) echo "<a href='../process/logout.php?msg=1'><h1>-</h1></a>" ?>UserName:</strong></h4>
									<input type="text" name="uname" class="form-control" value="<?php if(isset($_SESSION['dat'])) echo $_SESSION['dat'][1];?>">
									<h4><strong>Password:</strong></h4>
									<input type="password" name="pass" class="form-control">
								</div>
								<div class="">
									<ul class="navbar-right">
									<button class="btn btn-success" type="submit"><h4>Login</h4></button><br>
									<a href="signup.php">Signup</a>
								</ul>
								</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
