<?php 
error_reporting(0);

session_start();
if(!isset($_SESSION['name']))
{
	header('Location:index.php');
}

include('header.php');?><br>
<br>
<a href="logout.php" class="btn btn-primary ">Logout</a>
<a href="add_product.php" class="btn btn-primary pull-right">Add a Product</a>

  <div class="container">
    <?php 
	
	echo $_SESSION['user'];
	  
	  $sql = "SELECT * FROM cart ORDER BY id ASC";
      $result = mysqli_query($link, $sql);
        while($row = mysqli_fetch_array($result))
		{
		?>
		<div class="col-md-3 col-sm-6">
   <form method="post" action="">
  <div class="product-grid4">
                     <div class="product-image4">
                     <?php echo '<a href=http://localhost/onlineshop/img/'. $row['image']. ' alt="click to view full image" target="_blank">
  <img class="imge1" src=http://localhost/onlineshop/img/'. $row['image']. ' width="230" height="170"></a>';?> 

                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><h4><b style="color:#2e3192;"><?php echo $row['name']; ?></b></h4></h3>
                        <div class="product-desc">
                    <?php echo $row['des']; ?>
				            	<?php echo '<b><a href="view_detail.php?id='.$row['id'].'" text-decoration: none;">More Detail....</a></b>'; ?>
			            	</div>
                       
                        <div class="price">
                        <h4><b><?php echo "₹:".$row['price']; ?></b></h4>
                           &nbsp; <span>&#8377;1600 .00</span>
                        </div>
                        <div class="">
					  <input type="number"  step="1" class="product-quantity col-xs-4" name="quantity" value="1"/><br>
				<br>
          <input type="submit"  value="Add to Cart" class="add-to-cart" />
          <br>
          <?php echo '<a href="empty_cart.php?id='.$row['id'].'" class="btn btn-default"; text-decoration: none;">Remove Item</a>'; ?>
                    </div>
                </div>
            </div>
			</form>
		</div>
	<?php
	}
	?>       
	

   
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width:650px">
    
      
      <div class="modal-content">
	   <h3>Product Detail</h3>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>	
</div>
</div>
<?php include('footer.php') ?>
