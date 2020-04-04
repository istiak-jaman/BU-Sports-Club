<?php include'S_inc/header.php';?>
<?php
  $login = Session::get("cuslogin");
  if ($login == false) {
    header("Location:S_login.php");
  }
?>
<style>
.psuccess{
        width: 700px; height: 300px; text-align: center; border: 5px solid #929196; margin:0 auto; padding: 50px;
}
    .psuccess h2{
        border-bottom: 3px solid #ddf;margin-bottom: 80px;padding-bottom: 10px;color: red;font-size: 25px;font-weight: bold;
}
.psuccess p{
    line-height: 25px;text-align: left;font-size: 17px;
}

</style>

 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="psuccess">
    			<h2>Order Success !!!</h2>
                <?php
                     $cmrId = Session::get("cmrId");
                     $amount = $ct->payableAmount($cmrId);
                     if ($amount) {
                        $sum = 0;
                        while ($result = $amount->fetch_assoc()) {
                            $price = $result['price'] ;
                            $sum = $sum + $price ;
                        }
                     }
                ?>
    			<p style="color:green; font-weight:bold;">You Ordered Successfully..!!</p>
                <p style="color:navy;">Total Payable Amount(Including Vat) :<span style="color:red;"> BDT 
                <?php
                    $vat = $sum * 0.1;
                    $total = $sum + $vat;
                    echo $total;
                ?> 

                </span></p>
                <p>Thanks for Purchase. We Received Your Order Successfully. We will contact you As soon as Possible with delivery details. Here is your order details....<a href="orderdetails.php">Order Details</a> </p>

    		</div>
    		<div class="back">
    				<a href="cart.php">Previous</a>
    		</div	
 		</div>
 	</div>
</div>
<?php include'S_inc/footer.php';?> 