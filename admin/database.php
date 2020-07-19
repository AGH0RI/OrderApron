<?php 
//DATABASE CONNECTION BY GKM
include '../process/connection.php';      
//DATABASE CONNECTION ENDS
if(isset($_SESSION['admindata']))
{
$img=$_FILES['img'];
$cat=$_POST['category'];
$name=$_POST['product'];
$price=$_POST['price'];
$disc=$_POST['disc'];
$discription=$_POST['discription'];
$quantity=$_POST['quantity'];
if ($img['error']==0) 
{
	$imgname=$img['name'];
	move_uploaded_file($img['tmp_name'],'image/'.$img["name"]);
}
else
	if (isset($_POST['img1']))
		$imgname=$_POST['img1'];
$shop=$_SESSION['data'][3];
if(isset($_POST['id']))
{
	$date=$_POST['id'];
	
	echo $shop;
	$qry=mysqli_query($con,"update $shop set image='$imgname',category='$cat',product='$name',price='$price',discount='$disc',discription='$discription',quantity='$quantity' where id='$date'");
}
else
{
 if($cat=="")
 $cat="OTHER";
$qry=mysqli_query($con,"insert into $shop(image,category,product,price,discription,discount,quantity) values('$imgname','$cat','$name','$price','$discription','$disc','$quantity')");
}
//header("location:admin.php");
}
else
//header("location:login.php?msg1=Please Login First");
?>