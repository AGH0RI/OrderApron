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
	<title>BANNERS</title>
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
if(isset($_GET['ban']))
 {
     $n=$_GET['ban'];
     $i=1;
     ?>
 <div><br>
     <form action="upload.php" enctype="multipart/form-data" method="POST">
     <?php
    while($i<=$n)
     {
    ?>
    <tr>
    <td><input type="file" accept="image/*" name="gkm<?php echo $i;?>"></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <?php
     $i=$i+1;
     }
     ?>
     <input type="hidden" name="n" value="<?php echo $n;?>">
     <button type='submit'>UPLOAD</button>
     </form>
 </div>
<?php
 }
 else
 {
 ?>
 <div><br>
 <h1>
     ENTER NUMBER OF BANNERS YOU WANT TO ENTER
 </h1>
 <form action="banner.php">
 <input type="number" name="ban">
 <button class="btn btn-default" type="submit">NEXT</button>
 </form>
 <a href="upload.php?del=yes">DELETE ALL BANNERS</a>
 </div>
 <?php
 }
 ?>