	<?php include('header.php');
 
 ?>	<div id="container">
<a href="index.php" class="btn btn-primary ">Go back to cart page</a>

<!-- <div class="panel panel-default container" style="padding:10px">
  <div class="panel-heading">
	
  </div> -->

	
		<form name="add_cart" id="cart_add" class="login-form" action="login_action.php" method="post" enctype="multipart/form-data" onsubmit="">
		
			
				<center><h3>Login</h3><br>
				
					<input type="text" name="name"  id="name" placeholder="Username" class=""/></br></br>
				
					<input type="password" name="pass" id="code" placeholder="PASSWORD" required class=""></br></br>
				
					<input type="submit" name="submit" onclick = "addRecord()" id="submit" class="btn btn-primary" value="Add" />
					
                   <a href="resgistration.php" class="btn btn-primary">Sign up</a>
				
			
		</form>
	</div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>