<?php 
       	$dbname = "magiclamp";
        $servername = "localhost";
        $username = "root";
        $password = "";
		 $con = mysqli_connect($servername, $username, $password,$dbname) 
        or die("Database not connected");
	session_start();
        
        
 ?>