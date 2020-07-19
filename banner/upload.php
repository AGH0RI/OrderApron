<?php
/*=================================================================================================
								DATABASE CONNECTION ESTABLISHED
=====================================================================================================*/
	include '../connection/connection.php';
/*=================================================================================================
								DATABASE CONNECTION ENDS
=====================================================================================================*/
if(isset($_GET['del']))
{
    mysqli_query($con,"delete from banner");
    header("location:banner/banner.php");
}
$i=1;
$n=$_POST['n'];
while($i<=$n)
{
    $img=$_FILES['gkm'.$i];;
	$move=move_uploaded_file($img['tmp_name'],'gkm/'.$i.'.jpg');
	$loc="banner/gkm/".$i.".jpg";
    $qry=mysqli_query($con,"insert into banner(name,id) values('$loc','$i')");
    $i=$i+1;
}
header("location:../admin/admin.php");
?>
