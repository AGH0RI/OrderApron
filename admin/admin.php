<?php
/*=================================================================================================
								DATABASE CONNECTION ESTABLISHED
=====================================================================================================*/
	include_once '../process/connection.php';
/*=================================================================================================
								DATABASE CONNECTION ENDS
=====================================================================================================*/
if(isset($_SESSION['admindata']))
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
	<link rel="stylesheet" type="text/css" href="http://orderaprons.com/design/bootstrap.min.css">
	<link rel="icon" type="" href="http://orderaprons.com/admin/profile/default.png">
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
	<title>
		Admin Page
	</title>
	<link rel="stylesheet" type="text/css" href="../design/bootstrap.min.css">
	<style type="text/css">
		.noborder,tr,td,th
		{
			border: none !important;
		}
	</style>
</head>
<body>
	<div>
		<div class="container-fluid">
			<h1>ENTER PRODUCTS</h1>
			<form action="../admin/database.php" enctype="multipart/form-data" method="post">
				<table cellspacing=10px>
					<div class="form-group">
					<tr>
						<td>
							IMAGES : 
						</td>
						<td>
							<input class="form-control" type="file" name="img" accept="image/*" required>
						</td>
					</tr>
					<tr>
						<td>
							Category : 
						</td>
						<td>
							<input class="form-control" type="text" name="category">
						</td>
					</tr>
					<tr>
						<td>
							Product : 
						</td>
						<td>
							<input class="form-control" type="text" name="product" required>
						</td>
					</tr>
					<tr>
						<td>
							Discription : 
						</td>
						<td>
							<textarea class="form-control" type="text" name="discription" required></textarea> 
						</td>
					</tr>
					<tr>
						<td>
							Price:
						</td>
						<td>
							<input class="form-control" type="number" name="price" required>
						</td>
					</tr>
					<tr>
						<td>
							Quantity : 
						</td>
						<td>
							<input class="form-control" type="number" name="quantity" required>
						</td>
					</tr>
					<tr>
						<td>
							Discount: 
						</td>
						<td>
							<input class="form-control" type="number" name="disc" required>
						</td>
					</tr>
					<tr><td>&nbsp;</td></tr>
					<tr style="margin:10px; !important">
						<td align='left'> 
							<button class="btn btn-danger" type="reset">RESET</button>
						</td>
						<td align='right'>
							<button type="submit" class="btn btn-success">SUBMIT</button>
						</td>
					</tr>
					
					</div>
				</table>
			</form>
		<tr>
		 <td colspan=2><a href="../banner/banner.php"><Button class="btn btn-info">SET BANNERS</Button></a></td>
		</tr>
	</div>
	</div>
</body>
</html>


<table id="tabdata" class="table table-danger noborder">
	<br><br><br><br><br>
	<th align="center"></th>
	<th align="center">Category</th>
	<th align="center">Product</th>
	<th align="center">Discription</th>
	<th align="center">Price</th>
	<th align="center">Quantity</th>
	<th align="center">Discount</th>

<?php
$data=$_SESSION['data'][3];
$qry=mysqli_query($con,"select * from  $data");
while ($fetch=mysqli_fetch_assoc($qry))
 {
	?>
	<tr>
	<td><img height="200px" width="200px" src="image/<?php echo $fetch['image'];?>" class="img-thumbnail"></td>
	<td align="center"><?php echo $fetch['category']; ?></td>
	<td align="center"><?php echo $fetch['product']; ?></td>
	<td align="center"><?php echo $fetch['discription']; ?></td>
	<td align="center"><?php echo $fetch['price']; ?></td>
	<td align="center"><?php echo $fetch['quantity']; ?></td>
	<td align="center"><?php echo $fetch['discount']; ?></td>	
	<td><a href="edit.php?msg1=<?php echo $fetch['id'];?>">Edit</a></td>
	<td><a href="edit.php?msg=<?php echo $fetch['id'];?>">Delete</a></td>
	</tr>
<?php
	}
 ?>

</table>
<?php 
}
else
{
	header("location:admin/login.php?msg1=Please Login First");
 }
 ?>