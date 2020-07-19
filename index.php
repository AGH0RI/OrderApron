<?php 
/*=================================================================================================
								DATABASE CONNECTION ESTABLISHED
=====================================================================================================*/
	include 'process/connection.php';
/*=================================================================================================
								DATABASE CONNECTION ENDS
=====================================================================================================*/

/*=================================================================================================
								DR. BANNER ALIVE
=====================================================================================================*/
	//$q=mysqli_query($con,"select * from banner");
 	// $n=0;
/*=================================================================================================
								HULK DEAD
=====================================================================================================*/
?>
<!-- =================================================================================================
							HEAD TAG FOR ALL EXPERIMENT BY GAURAV KUMAR MISHRA 
==================================================================================================== -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- =================================================================================================
							ALL LINKS BY GAURAV KUMAR MISHRA 
==================================================================================================== -->
	<link rel="stylesheet" type="text/css" href="design/bootstrap.min.css">
	<link rel="icon" type="" href="admin/profile/default.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
<!-- =================================================================================================
							404 LINK NOT FOUND
==================================================================================================== -->
	<title>MagicLamp</title>
	<style type="text/css">
		<?php
			while($r=mysqli_fetch_assoc($q))
			{
		?>	
			.bg<?php echo $r['id'] ?>
				{
					margin-top:0px;
					background:url(<?php echo $r['name'] ?>);
					background-repeat: no-repeat;
					background-position: center;
					background-size: cover;
					height:30em;
					width:auto;
				}
		<?php 
			$n++;
			}
		?>	
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
		#cart_count
		{
			background-color:white;
    		text-align: center;
    		padding: 0 0.9rem 0.1rem 0.9rem;
    		border-radius: 3rem;
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
	include 'process/navbar.php';
 ?>
<!--=================================================================================================
								NAVBAR ENDS HERE
===================================================================================================-->
<!--/*=================================================================================================
								(: BODY CONTENT STARTED :)
=====================================================================================================*/-->
<!DOCTYPE html>
<html>
<head>
	

</head>
<body>
<div id="back" class="bg1">
	<button class="btn trans" onclick="bkw(<?php echo $n; ?>)" style="color: auto;float: left;outline: none;box-shadow: all;"><h1><</h1></button>
	<button class="btn trans" onclick="fwd(<?php echo $n; ?>)" style="color: auto;float: right;outline: none;box-shadow: all;"><h1>></h1></button>
</div>
<span class="container-fluid" style="margin:0em 0em 8em 0em ;">
	<div class="rows">
		<?php
/*=================================================================================================
							READ DATA FROM ADMIN DATA TABLE
=====================================================================================================*/
		$qry=mysqli_query($con,"select * from admindata");
		while($fetch=mysqli_fetch_assoc($qry))
	
		{ 
		   
		?>
		 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-danger">
				<div class="panel-heading">
				    <h2><?php echo $fetch['NAME'];?></h2>
				</div>
			<a href="user/detail.php?date=<?php echo $fetch['DATE'];?>" class="btn">
			   	<div class="panel-body">
					<img class="img-responsive" src="admin/image/<?php echo $fetch['IMAGE'];?>">
				</div>
			</a>
				<div class="panel-footer" style="padding:10px;height:4em;">
					Charges: Rs.<?php echo $fetch['PRICE']; ?>
					<a href="cart/cart.php?qty=1 && date=<?php echo $fetch['DATE'];?>">
					    <button class="btn btn-success pull-right">Add To Cart</button>
					</a>
				</div>
			</div>
		</div>
		
		<?php 
		}
/*=================================================================================================
								ADMIN DATA WHILE LOOP ENDS
=====================================================================================================*/
		?>
	</div>
</div>
<!--=================================================================================================
								JAVASCRIPT FACTORY GATE
==================================================================================================== -->
<script type="text/javascript">
	b=<?php echo $n ?>;
	a=b;
function fwd(i)
{
	console.log("a="+a);
	if(a<i)
	{
		document.getElementById('back').className="bg"+a;
		a++;
	}
	else
	{
		document.getElementById('back').className="bg"+a;
		a=1;
	}

}
function bkw(i)
{
	console.log("b="+b);
	if(b>1)
	{
		document.getElementById('back').className="bg"+b;
		b--;
	}
	else
	{
		document.getElementById('back').className="bg"+b;
		b=i;
	}

}
setInterval(bkw,3000,<?php echo $n; ?>);
</script>
<!-- =================================================================================================
								JAVASCRIPT FACTORY TRIP ENDS
==================================================================================================== -->
</body>
</html>