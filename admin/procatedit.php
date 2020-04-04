
<?php include 'include/adminheader.php';?>
<?php include 'include/adminsidebar.php';?>
<?php include '../classes/ProductCategory.php'; ?>
<?php
    
    if (!isset($_GET['catid']) || $_GET['catid'] == NULL ) {
        echo "<script>window.location = 'procatlist.php'; </script>";
    }else{
        $id = $_GET['catid'];
    }
    $cat = new ProductCategory();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $catName = $_POST['proCatName'];
        $updateCat = $cat->catUpdate($catName, $id);
    }

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Product Category</h2>
               <div class="block copyblock"> 
            <?php
                if (isset( $updateCat)) {
                    echo  $updateCat;
                }

            ?>
            <?php
                $getCat = $cat->getCatById($id);
                if ($getCat) {
                    while($result = $getCat->fetch_assoc()){


            ?>
                 <form method="post" action="">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="proCatName" value="<?php echo $result['proCatName'];?>" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php } }?>
                </div>
            </div>
        </div>
<?php include 'include/adminfooter.php';?>