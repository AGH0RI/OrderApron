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
<html>
<body>
<div style="margin-bottom: 87px;">
	<nav class="navbar navbar navbar-inverse navbar-fixed-top">
		<ul class="nav navbar-inverse navbar-nav navbar-left">
				<li><a href="http://orderaprons.com/"><h3><i class="fas fa-shopping-basket"></i> Orderaprons</h3></a></li> 
		</ul>
	<div class="navbar navbar-fixed-top">
	<div class="container-fluid" style="margin-top:18px;">	
	<?php
	if(isset($_SESSION['userdata']))
		{ ?>
			<ul class="nav navbar-nav navbar-right">
				<li class="hid" id="user" onmouseenter="act()"><a><img src="http://orderaprons.com/profile/<?php echo $_SESSION['userdata'][2];?>" class="img-rounded" height="20px" width="20px">
				<?php echo " Hello ".$_SESSION['userdata'][0]?></a>
				<ul style="background-color:#333333;margin:0px 30px 0px 30px;" onmouseleave="act2()" class="navbar-nav nav">
					<div style="margin:20px 10px 20px 10px;" id="active" class="hidden">
					    <li><a class="disabled" href="http://orderaprons.com/admin/admin.php">ADMIN</a></li><br>
						<li><a class="disabled" href="profile.php">PROFILE</a></li><br>
			   			<li><a class="disabled" href="http://orderaprons.com/process/logout.php"> LOGOUT &nbsp;</a></li>
					</div>
				</ul>
				</li>
			</ul>
	<?php 
		}
	else
		{
		?>
		<ul  class="nav navbar-nav navbar-right">
			<li><a href="http://orderaprons.com/user/login.php"> LOGIN / SIGNUP </a></li>
			<li><a href="http://orderaprons.com/admin/login.php" style="color: white;" class=" btn btn-danger"> &nbsp;ADMIN&nbsp; </a></li>
		</ul>
	<?php 
		}?>

<!--=================================================================================================
								RE-SEARCHING LABORATORY 
==================================================================================================== -->			
	<ul class="nav navbar-nav navbar-right">	
			<li>
			    <ul class="nav navbar-nav" style="margin-top:10px">
			        <li>
			            <input onkeyup="search()" class="form-control" type="text" name="search" placeholder="Search....." id="searc">
			            <div class="hidden" id="res" style="border-radius: 5px; background-color:#333333;"></div>
			        </li>
			        <li><button onclick="search()" class="btn" style="background-color:black; color:white;">GO</button></li>
			     </ul>
			 </li>
		</ul>
	</div>
</nav>
</div>
<!--================================================================================================
                        SCRIPTING FOR NAVBAR                                                        
====================================================================================================-->
<script>
function search()
{
	k=document.getElementById('searc').value;
	if(k.length!=0)
		document.getElementById('res').className='';
	else
		document.getElementById('res').className="hidden";
		http=new XMLHttpRequest();
		http.open("GET","http://orderaprons.com/search.php?req="+k,true);
		http.send();
		v=http.onreadystatechange=function()
		{
			 if (this.readyState==4 && this.status==200)
			 {
				document.getElementById('res').innerHTML=this.responseText;	 	
			 }
		}
}
    function act2()
{
	document.getElementById("active").className="hidden";
	document.getElementById("user").className="hid";
}
function act()
{
	if(document.getElementById("user").className=="hid")
	{
		document.getElementById("active").className="";
		document.getElementById("user").className="sho";	
	}
}
</script>
<!--================================================================================================
                        SCRIPTING FOR NAVBAR TERMINATED                                                    
====================================================================================================-->
</body>
<!--=================================================================================================
								NAVBAR ENDS HERE
===================================================================================================-->
<?php
	$c=0;
	?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Payment Details</title>
 	<style type="text/css">
 		table td , table tr
 		{
 			border:none !important;
 		}
 	</style>
 </head>
 <body>
 	<div class="container-fluid">
 		<div class="panel panel-danger">
 			<div class="panel-heading">
 				<h1> Payment Detail</h1>
 			</div>
 			<div class="panel-body">
 				<table class="table">
 					<tr>
 						<th>Product Image</th>
 						<th>Product</th>
 						<th>Quantity</th>
 						<th>Cost</th>
 						<th>Discount</th>
 					</tr> 
 					<?php
 					 if(empty($_SESSION['cart']))
 						{?>
 					<tr>
 						<td style="color: red;">Cart Empty</td>
 					</tr>
 					<?php } else{
 					foreach ($_SESSION['cart'] as $i => $ar) 
 					{
 					?>
 					<tr>
 						<td><img height="100px" width="100px" src="http://orderaprons.com/admin/image/<?php echo $ar['pic'];?>" alt="http://orderaprons.com/admin/image/<?php echo $ar['pic'];?>"></td>
 						<td><?php echo " ".$ar['pname']; ?> </td>
 						<td><?php echo $ar['qty'] ?> </td>
 						<td><?php echo $ar['amt']; ?></td>
 						<td><?php echo $ar['disc']; $fa=($ar['amt']-($ar['amt']*$ar['disc']/100)); ?></td>
 					</tr>
 				<?php
 				$c=$c+$fa*$ar['qty']; }} ?>
 				</table>
 			</div>
 			<div class="panel-footer" style="height: 210px; width: 100%;">
 				<table class="table" align="right">
 				 	<tr>
 						<td>Cost of Cart</td>
 						<td>:</td>
 						<td><?php echo " ".$c; ?></td>
 					</tr>
 					<tr>
 						<td>GST(18%) </td>
 						<td>:</td>
 						<td><?php echo "+".$tax=$c*(.18); ?></td>
 					</tr>
 					<tr>
 						<td>Total Amount</td>
 						<td>:</td>
 						<td><?php echo $tot=$c+$tax; ?></td>
 					</tr>
 					
 					<tr align="right">
 						<td align="right">
 							<a href="http://orderaprons.com/cart/clr_cart.php"><button class="btn btn-warning" type="button">Clear Cart</button></a>
 							<a href="http://orderaprons.com/index.php"><button class="btn btn-info">Add More Item</button></a>		
 						</td>
 					</tr>
 					<form action="pay.php" method="POST">
 					<tr>
 						<td><input type="hidden" name="tot" value="<?php echo $tot ;?>">
 							<button type="submit" class="btn btn-success">Proceed To Pay</button> </td>
 					</tr>
 					</form>
 				</table>
 			</div>
 		</div>
 		
 		
 	</div>
 </body>
 </html>
 <?php 
$_SESSION['tot']=$tot;
  ?>