<?php
     $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $dbname = "db2"; 
	 $link = mysqli_connect( $host,  $user, $pass,$dbname);

         // Check Connection 
        if($link === false)
	 {
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>		 
