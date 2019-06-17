
<?php include('header.php');
 ?>
</br></br>

<div class="panel panel-default container" style="padding:10px">
  <div class="panel-heading">
      <h1 style="text-align:center">Cart System in PHP</h1>
  </div>
	<div id="container ">
	 <CAPTION><h3>Registration</h3></CAPTION>
		<form name="add_cart" id="cart_add" action="registration_logic.php" method="post" enctype="multipart/form-data" onsubmit="">
			
					Name:<br><input type="text" name="name"  id="name" class=""/><br><br>
					Password:<br><input type="password" name="pass" id="code" required class=""><br><br>
					E-mail:<br><input type="text" name="email" id="code" required class=""><br><br>
					<input type="submit" name="Submit" onclick="addRecord()" id="submit" class="btn btn-primary" value="Add" href="registration_logic.php"/>
					
				
			
		</form>
	
	</div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>