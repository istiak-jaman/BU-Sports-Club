<?php include 'include/adminheader.php'; ?>
<?php include 'include/adminsidebar.php'; ?>
<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Cart.php');
	$ct = new Cart();
	$fm = new Format();
	

?>
<?php
	if (isset($_GET['shiftid'])) {
		$id    = $_GET['shiftid'];
		$time  = $_GET['time'];
		$price = $_GET['price'];

		$shift  = $ct->productShifted($id ,$time, $price );
	}

	if (isset($_GET['removeid'])) {
		$id    = $_GET['removeid'];
		$time  = $_GET['time'];
		$price = $_GET['price'];

		$removeOrder  = $ct->removeProductShifted($id ,$time, $price );
	}

?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Purchase Request</h2>
                <?php
                	if (isset($shift)) {
                		echo $shift;
                	}
                	if (isset($removeOrder)) {
                		echo $removeOrder;
                	}

                ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Id</th>
							<th>Order Time</th>
							<th >Product</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Cust. Id</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						
						$getOrder = $ct->getAllOrderProduct();
						if ($getOrder) {
							while ($result = $getOrder->fetch_assoc()){
					?>
						<tr class="odd gradeX">
							<td><?php echo $result['id']; ?></td>
							<td><?php echo $fm->formatDate($result['date']); ?></td>
							<td><?php echo $result['productName']; ?></td>
							<td><?php echo $result['quantity']; ?></td>
							<td>BDT <?php echo $result['price']; ?></td>
							<td><?php echo $result['cmrId']; ?></td>
							<td><a href="buyeraddress.php?custId=<?php echo $result['cmrId']; ?> "> View Details</a></td>
							<?php
								if ($result['status'] == '0') { ?>
									<td><a href="?shiftid=<?php echo $result['cmrId']; ?> & price=<?php echo $result['price']; ?> & time=<?php echo $result['date']; ?>">Shifted</a></td>
							<?php 	} elseif ($result['status'] == '1') { ?>
								<td>Pending</td>
						<?php	}else { ?>
							
									<td><a href="?removeid=<?php echo $result['cmrId']; ?> & price=<?php echo $result['price']; ?> & time=<?php echo $result['date']; ?>">Remove</a></td>
							<?php 	} ?>
						</tr>
						<?php } }?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'include/adminfooter.php'; ?> 
