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
 ?>
<!--=================================================================================================
								NAVBAR ENDS HERE
===================================================================================================-->
<?php 
//DATABASE CONNECTION BY GKM
	    include '../process/dbcon.php';
//DATABASE CONNECTION ENDS
$date=$_GET['date'];
$qry= "Select * from admindata where DATE='$date'";
$sql=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Detail</title>
 	<style type="text/css">

 		.borderless td, .borderless th ,.borderless tr
 		{
				border: none !important;		
		}
 	</style>
 </head>
 <body>
 <div class="container" style="margin-top:8em">
 <div class="col-lg-6 col-md-6 col-sm-6">
 	<img class="img-responsive img-thumbnail" width="60%" height="60%" src="../admin/image/<?php echo $row['IMAGE']; ?>">
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
	<div class="panel panel-danger">
		<div class="panel-heading ">
			<h1><?php echo $row['NAME']; ?></h1>
		</div>
		<div class="panel-body">
			<h2> Price :₹<?php echo $row['PRICE']; ?></h2>
			<div class="panel-footer">
				<h4>Discount :<?php echo $row['DISCOUNT']; ?>%</h4>	
			</div>
		</div>
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 ">
	<form action="../cart/cart.php" method="GET" >
		<table class="table borderless" style="border: none;">
		<tr>
		<td>Enter Quantity</td>
		<td><div class="form-group"> <input style="margin:10px 0px 0px; border: none; border-bottom: solid grey; outline: none;" type="number" name="qty"></div></td>
		</tr>
		<tr>
		<td>Enter Address </td>
		<td><div class="form-group"><input style="margin:10px 0px 0px;border: none; border-bottom: solid grey; outline: none;" type="text" name="add"></div><td>
		</tr>
		<input type="hidden" name="date" value='<?php echo $row['DATE']; ?>' >
		<tr>
			<td><button type="submit" class="btn btn-danger">
				Proceed to Cart
			</button></td>
		</tr>
	</form>
</div>	
 </body>
 </html>