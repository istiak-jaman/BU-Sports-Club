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
  			   <div class="mbpay">

           </div>
           <div class="mbpay">

           </div>
		   </div>
	  </div>
</div>
<?php include'S_inc/footer.php';?> 