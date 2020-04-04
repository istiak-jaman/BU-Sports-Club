<?php include'S_inc/header.php';?>
<?php
  $login = Session::get("cuslogin");
  if ($login == false) {
    header("Location:S_login.php");
  }
?>


 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="payment">
    			<h2>Choose Your Payment Option</h2>
    			<a href="mobilepayment.php">Mobile Payment</a>
    			<a href="offlinepayment.php">Offline Payment</a>
    			<a href="onlinepayment.php">Online Payment</a>	

    		</div>
    		<div class="back">
    				<a href="cart.php">Previous</a>
    		</div	
 		</div>
 	</div>
</div>
<?php include'S_inc/footer.php';?> 