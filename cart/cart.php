<?php 
session_start();
//DATABASE CONNECTION BY GKM
	    include 'dbcon.php';
//DATABASE CONNECTION ENDS

$qty=$_GET['qty'];
$date=$_GET['date'];

$qry="select * from admindata where DATE='$date'";
$sql=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($sql);

$p=array();
$p['pdate']=$date;
$p['qty']=$qty;
$p['pname']=$row['NAME'];
$p['amt']=$row['PRICE']*$qty;
$p['pic']=$row['IMAGE'];
$p['disc']=$row['DISCOUNT'];

if(empty($_SESSION['cart']))
{
	$_SESSION['cart']=array($p);
}
else
{
	$fl=0;
	$al=$_SESSION['cart'];
	for($i=0;$i<sizeof($al);$i++)
	{
		if($al[$i]['pdate']==$date)
		{
			$al[$i]['qty']+=$qty;
			$fl=1;
		}
	}	

	if($fl==0)
		array_push($al, $p);

	$_SESSION['cart']=$al;
}


//echo "<pre>";
//print_r($_SESSION['cart']);
header("location:http://orderaprons.com/cart/view_cart.php");
 ?>
