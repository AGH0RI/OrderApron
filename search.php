<style>
    a
		{
			color:white;
			outline:none;
			border:none; 
		}
		a:hover
		{
			color:white;

		}
</style>
<?php 
	$d=$_GET['req'];
	/*=================================================================================================
								DATABASE CONNECTION ESTABLISHED
=====================================================================================================*/
	include 'dbcon.php';
/*=================================================================================================
								DATABASE CONNECTION ENDS
=====================================================================================================*/
	$qry=mysqli_query($con,"select * from admindata where NAME like '$d%'");
	while ($r=mysqli_fetch_assoc($qry))
	{
?>	
	<a href="user/detail.php?date=<?php echo $r['DATE'];?>">
		<?php echo $r['NAME']."<br>"; ?></a>
<?php
	}
 ?>