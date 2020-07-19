<?php 
//DATABASE CONNECTION BY GKM
	   include 'connection.php';
//DATABASE CONNECTION ENDS
//Table Created For Shop
$shop=$_POST['shop'];
mysqli_query($con,"CREATE TABLE `magiclamp`.`$shop` ( `id` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,  `product` VARCHAR(255) NOT NULL ,  `discription` TEXT NOT NULL ,  `quantity` INT(11) NOT NULL ,  `price` INT(11) NOT NULL ,  `image` VARCHAR(255) NOT NULL ,  `category` VARCHAR(255) NOT NULL ,  `discount` VARCHAR(255) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB COMMENT = 'This is shopkeeper database table.';");
	//End
$data=array($_POST['name'],$_POST['phone'],$_POST['uname'],$_POST['pass']);
$qry=mysqli_query($con,"insert into shopkeeper(shop,name,phone,username,password) values('$shop','$data[0]','$data[1]','$data[2]','$data[3]')");
 if($qry)
 	header("location:../admin/login.php");
else
	header("location:http:../admin/signup.php");
  ?>