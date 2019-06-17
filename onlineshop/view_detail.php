<?Php  include('header.php');?> 
<div class="panel panel-default container-fluid" style="padding:10px">
  <div class="panel-heading">
      
 <a href="index.php" class="btn btn-primary pull-right">More Shopping</a>
 <br><br>
 
	 
	</div>
	<br>
	<br>
 <div class="container">
    <?php 
	
	  if (isset($_GET['id'])) 
			 {
				$id = $_GET['id'];
				$sql="SELECT * FROM cart WHERE id=$id";
				$result = mysqli_query($link,$sql);
			 }	
			 $row = mysqli_fetch_array($result);	
				
		?>
 <div id="divToPrint"> 
 <h1 style="text-align:center">Product Details</h1>
	 <div class="row">
		 
		 <div class="col col-md-5">
		 <?php echo '<a href=http://localhost/onlineshop/img/'. $row['image']. ' alt="click to view full image" target="_blank">
			 <img class="imge1" src=http://localhost/onlineshop/img/'. $row['image']. ' width="400" height="540"></a>';?>
			</div>
			<div class="col-md-7">
			<h3><b>Model : </b><?php echo $row['name']; ?></h3>
		   <h4><b>Product description:</b><?php echo $row['des']; ?></h4>
		   <h3><b>Product Code : </b><?php echo $row['code']; ?></h3>
		   <h3><b>Price : </b><?php echo "₹ ".$row['price']; ?></h3>
			 <h3><b>Features: </b><?php echo $row['feature']; ?></h3>
			 <h3><b>Warrenty : </b><?php echo $row['warrenty']; ?></h3>
			 
			 
			</div>
			</div>  
	
			<br><br>
			 <br><br>
			 <br>
</div>
</div>
<?php include('footer.php'); ?>	