<!DOCTYPE html>
<!--=================================================================================================
								NAVBAR STARTED
=====================================================================================================-->
<html>
<body>
<div style="margin-bottom: 87px;">
	<nav class="navbar navbar navbar-inverse navbar-fixed-top">
		<ul class="nav navbar-inverse navbar-nav navbar-left">
				<li><a href="../"><h2><i class="fas fa-shopping-basket"></i> MagicLamp</h2></a></li> 
		</ul>
	<div class="navbar navbar-fixed-top">
	<div class="container-fluid" style="margin-top:18px;">	
	<?php
	if(isset($_SESSION['admindata']))
		{ ?>
			<ul class="nav navbar-nav navbar-right">
				<li class="hid" id="user" onmouseenter="act()"><a><img src="../profile/admindefault.jpg" class="img-rounded" height="20px" width="20px">
				<?php echo " Hello ".$_SESSION['admindata'][0]?></a>
				<ul style="background-color:#333333;margin:0px 30px 0px 30px;" onmouseleave="act2()" class="navbar-nav nav">
					<div style="margin:20px 10px 20px 10px;" id="active" class="hidden">
					    <li><a class="disabled" href="http://localhost/update27022020/public_html/admin/admin.php">ADMIN</a></li><br>
					    <li><a class="disabled" href="http://localhost/update27022020/public_html/banner/banner.php">BANNERS</a></li><br>
						<li><a class="disabled" href="http://localhost/update27022020/public_html/admin/profile/profile.php">PROFILE</a></li><br>
			   			<li><a class="disabled" href="http://localhost/update27022020/public_html/process/logout.php"> LOGOUT &nbsp;</a></li>
					</div>
				</ul>
				</li>
			</ul>
	<?php 
		}
		elseif(isset($_SESSION['userdata']))
		{ ?>
			<ul class="nav navbar-nav navbar-right">
				<li class="hid" id="user" onmouseenter="act()"><a><img src="http://localhost/update27022020/public_html/profile/<?php echo $_SESSION['userdata'][2];?>" class="img-rounded" height="20px" width="20px">
				<?php echo " Hello ".$_SESSION['userdata'][0]?></a>
				<ul style="background-color:#333333;margin:0px 30px 0px 30px;" onmouseleave="act2()" class="navbar-nav nav">
					<div style="margin:20px 10px 20px 10px;" id="active" class="hidden">
						<li><a class="disabled" href="http://localhost/update27022020/public_html/admin/profile/profile.php">PROFILE</a></li><br>
			   			<li><a class="disabled" href="http://localhost/update27022020/public_html/process/logout.php"> LOGOUT &nbsp;</a></li>
					</div>
				</ul>
				</li>
				<li><a href="http://localhost/update27022020/public_html/cart/view_cart.php"><i class="fas fa-shopping-cart"></i> Cart
				 <?php

                        if (isset($_SESSION['cart']))
                        {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }
                        else
                        {
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                    ?>
                    </a></li>
			</ul>
	<?php 
		}
	else
		{
		?>
		<ul  class="nav navbar-nav navbar-right">
			<li><a href="http://localhost/update27022020/public_html/user/login.php"> LOGIN / SIGNUP </a></li>
			<li><a href="http://localhost/update27022020/public_html/admin/login.php" style="color: white;" class=" btn btn-danger"> &nbsp;ADMIN&nbsp; </a></li>
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
function search()
{
	k=document.getElementById('searc').value;
	if(k.length!=0)
		document.getElementById('res').className='';
	else
		document.getElementById('res').className="hidden";
		http=new XMLHttpRequest();
		http.open("GET","http://localhost/update27022020/public_html/search.php?req="+k,true);
		http.send();
		v=http.onreadystatechange=function()
		{
			 if (this.readyState==4 && this.status==200)
			 {
				document.getElementById('res').innerHTML=this.responseText;	 	
			 }
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
</html>