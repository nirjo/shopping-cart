<?php 
error_reporting(0);
session_start();
require('connection.php');

if($_POST['submit'])
{
	
	
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	
	$sql = "SELECT *  FROM save where name='$name' && pass='$pass'";
	$result = mysqli_query($link,$sql);
	
	
	if($result)
	{
		
	    $_SESSION['name'] = $name;
		header("Location:main.php");
	}
	else
	{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}
?>