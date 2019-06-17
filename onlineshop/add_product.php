<?php include('header.php'); ?>
<a href="index.php" class="btn btn-primary pull-right">Go back to cart page</a>


	<div id="container1">
	
		<form name="add_cart" id="cart_add" class="reg-form" action="product_action.php" method="post" enctype="multipart/form-data" onsubmit="">
		<h3>Add new Product</h3>
					Product Name:<br>
					<input type="text" name="name"  id="name" class="form-control"/>
					Product Desc:<br>
					<textarea name="desc" id="des" rows="3" cols="22" class="form-control"></textarea>
					Code:<br>
					<input name="code" id="code" required class="form-control">
					Price:<br>
					<input type="text" name="price" required id="price" class="form-control" />
					Weight:<br>
					<input type="text" name="weight" required id="weight" class="form-control"/>
					Features:<br>
					<input type="text" name="feature"  required id="feature" class="form-control"/>
					Warrenty:<br>
					<input type="text" name="warrenty"  required id="warrenty" class="form-control"/>
					Upload image:
					<input type="file" name="photo"  required id="photo" class="form-control"/><br>
				<center>	<input type="submit" name="Submit" onclick = "addRecord()" id="submit" class="btn btn1" value="Add" />
					
			
		</form>
	</div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
<script>
 
</script>