<?php 
session_start();
if(isset($_SESSION['admindata']))
{
//DATABASE CONNECTION BY GKM
	   include '../process/connection.php';
//DATABASE CONNECTION ENDS


if(isset($_GET['msg']))
{
	$date=$_GET['msg'];
	$shop=$_SESSION['data'][3];
	$qry=mysqli_query($con,"delete from $shop where id='$date'");
	header("location:admin.php");
}
else if(isset($_GET['msg1']))
{
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
	<title>EDIT PRODUCT DETAILS</title>
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
	$date=$_GET['msg1'];
	$qry=mysqli_query($con,"select * from admindata where DATE='$date'");
	$fetch=mysqli_fetch_assoc($qry);
?>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/jinni/design/bootstrap.min.css">
</head>
<body>
	<div>
		<div class="container-fluid">
			<h1>EDIT SERVICES OFFERED</h1>
			<form action="database.php" enctype="multipart/form-data" method="post">
				<input type="hidden" name="date" value="<?php echo $date?>">
				<table>
					<div class="form-group">
					<tr>
						<td align="center">
							<img height="100px" width="100px" class="img-thumbnail" src="image/<?php echo $fetch['IMAGE']?>">
						</td>
						<td align="center">
							<input class="form-control" type="file" name="img" accept="image/*">
							<input type="hidden" name="img1"  value="<?php echo $fetch['IMAGE']?>">
						</td>
					</tr>
					<tr>
						<td>
							Category : 
						</td>
						<td>
							<input class="form-control" type="text" name="cat" value="<?php echo $fetch['CATEGORY']?>">
						</td>
					</tr>
					<tr>
						<td>
							Product : 
						</td>
						<td>
							<input class="form-control" type="text" name="name" value="<?php echo $fetch['NAME']?>">
						</td>
					</tr>
					<tr>
						<td>
							Discription : 
						</td>
						<td>
							<textarea class="form-control" name="discription" value=""><?php echo $fetch['discription']?></textarea>
						</td>
					</tr>
					<tr>
						<td>
							Price : 
						</td>
						<td>
							<input class="form-control" type="number" name="disc" value="<?php echo $fetch['price']?>">
						</td>
					</tr>
					<tr>
						<td>
							Quantity : 
						</td>
						<td>
							<input class="form-control" type="number" name="disc" value="<?php echo $fetch['quantityT']?>">
						</td>
					</tr>
					<tr>
						<td>
							Discount : 
						</td>
						<td>
							<input class="form-control" type="number" name="disc" value="<?php echo $fetch['discount']?>">
						</td>
					</tr>
					<tr>
						<td>
							<button class="btn btn-danger" type="reset">RESET</button>
						</td>
						<td>
							<button type="submit" class="btn btn-success">SUBMIT</button>
						</td>
					</tr>
					</div>
				</table>
			</form>
		</div>
	</div>
</body>
<?php
}
 }
 else
 header("location:admin/login.php?msg1=Please Login First");
 ?>
