<?php 
require('connection.php');

	$del=$_GET['id'];
	$sql = "DELETE FROM cart WHERE id='$del'";
	if(mysqli_query($link, $sql))
	{
		echo "Records were deleted successfully.";
		header('Location:index.php');
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}


?>