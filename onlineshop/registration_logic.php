<?php
    require('connection.php');
	extract($_POST);	
	//Create INSERT query
	$name = $_POST['name'];
	$pass = $_POST['pass'];
    $email = $_POST['email'];
	$sql="INSERT INTO save (name,pass,email) VALUES('$name','$pass','$email')";
	$result = mysqli_query($link, $sql);
	
	if($result)
	{
		echo "Insert Successfully";
		header("Location:index.php");
	}
	else
	{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>