
<?php include 'include/adminheader.php';?>
<?php include 'include/adminsidebar.php';?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../classes/Customer.php');
    

?>
<?php
    
    if (!isset($_GET['custId']) || $_GET['custId'] == NULL ) {
        echo "<script>window.location = 'buyrequest.php'; </script>";
    }else{
        $id = $_GET['custId'];
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
         echo "<script>window.location = 'buyrequest.php'; </script>";
    }

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Customer Details</h2>
               <div class="block copyblock"> 
            
            <?php
                $cmr = new Customer();
                $getCmr = $cmr->getCustomerData($id);
                if ($getCmr) {
                    while($result = $getCmr->fetch_assoc()){


            ?>
                 <form method="post" action="">
                    <table class="form">					
                        <tr>
                            <td>Name</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['name'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['address'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['city'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Zip-Code</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['zip'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Phone No.</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['phone'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['email'];?>" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="OK" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php } }?>
                </div>
            </div>
        </div>
<?php include 'include/adminfooter.php';?> 