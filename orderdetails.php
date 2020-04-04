<?php include'S_inc/header.php';?>
<style >
	.notfound{}
	.notfound h2{font-size: 100px; line-height: 130px; text-align: center;}
	.notfound h2 span{ display: block; color: red; font-size: 170px;}
    .tblone tr td{text-align: justify;}
</style>
<?php
    $login = Session::get("cuslogin");
    if ($login == false) {
        header("Location:S_login.php");
    }
?>
<?php
    if (isset($_GET['cmrid'])) {
        $id    = $_GET['cmrid'];
        $time  = $_GET['time'];
        $price = $_GET['price'];

        $confirm  = $ct->productShiftConfirm($id ,$time, $price );
    }

?>
 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="order">
    			<h2><span></span> Your Order Details</h2>
                    <table class="tblone">
                            <tr>
                                <th >No</th>
                                <th >Product Name</th>
                                <th >Image</th>
                                <th >Quantity</th>
                                <th > Price</th>
                                <th > Date</th>
                                <th > Status</th>
                                <th> Action</th>
                            </tr>

                            <?php
                                $cmrId = Session::get("cmrId");
                                $getOrder = $ct->getOrderProduct($cmrId);
                                if ($getOrder) {
                                    $i = 0;
                                    
                                    while ($result = $getOrder->fetch_assoc()) {
                                        $i++;
                                    
                            ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $result['productName'] ;?></td>
                                <td><img src="admin/<?php echo $result['image'] ;?>" alt=""/></td>
                                <td><?php echo $result['quantity'] ;?></td>
                                <td>BDT  
                                    <?php 
                                        echo $result['price'] ;
                                    ?>
                                </td>
                                <td><?php echo $fm->formatDate($result['date']) ;?></td>
                                <td><?php

                                   if($result['status'] == '0' ){
                                        echo "Pending";
                                   }elseif($result['status'] == '1'){ 
                                        echo "Shifted";
                                    
                                   }else{
                                         echo "OK";
                                   }


                                 ?></td>
                                 <?php
                                      if ($result['status'] == '1') { ?>
                                          <td><a href="?cmrid=<?php echo $cmrId; ?> & price=<?php echo $result['price']; ?> & time=<?php echo $result['date']; ?>">Confirm</a></td>
                                    <?php  } elseif($result['status'] == '2'){  ?>
                                        <td> OK</td>
                                <?php  }elseif($result['status'] == '0'){?>
                                <td> N/A</td>
                                <?php } ?>
                            </tr>
                            
                            <?php } }?>
                        </table>

    		</div>

    	</div> 	
       <div class="clear"></div>
    </div>
 </div>
</div>
<?php include'S_inc/footer.php';?>  