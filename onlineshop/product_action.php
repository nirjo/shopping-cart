<?php

    require('connection.php');
   
    //setup a directory where images will be saved 
    $target = "./images/"; 
    $target = $target . basename( $_FILES['photo']['name']); 
    

    $name = $_POST['name'];
	$desc = $_POST['desc'];
    $code = $_POST['code'];
    $price= $_POST['price'];
	$weight= $_POST['weight'];
	$feature= $_POST['feature'];
    $warrenty= $_POST['warrenty'];
    $image = $_FILES['photo']['name'];

	

    //Create INSERT query
	
	$sql = "INSERT INTO cart(name,code,image,price,des,feature,weight,warrenty) VALUES('$name','$code','$image','$price','$desc','$feature','$weight','$warrenty')";
	$result = mysqli_query($link, $sql);
	$moved = move_uploaded_file($_FILES['photo']['tmp_name'], $target);
		
    
    //Check whether the query was successful or not
    if($result) 
	{
         echo "Records inserted successfully.";
		 header("Location:index.php");
		} 
		else
		{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
 ?>
