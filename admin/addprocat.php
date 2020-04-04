<?php include 'include/adminheader.php';?>
<?php include 'include/adminsidebar.php';?>
<?php include '../classes/ProductCategory.php'; ?>
<?php
    $cat = new ProductCategory();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $proCatName = $_POST['proCatName'];
        $insertCat = $cat->proCatInsert($proCatName);
    }

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Product Category</h2>
               <div class="block copyblock"> 

        <?php
            if(isset($insertCat)){
                echo $insertCat;
            }

        ?>
                 <form action=" " method="post">
                    <table class="form">                    
                        <tr>
                            <td>
                                <input type="text" name = "proCatName" placeholder="Enter Product Category Name..." class="medium" />
                            </td>
                        </tr>
                        <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'include/adminfooter.php';?>