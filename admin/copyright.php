<?php include 'include/adminheader.php'; ?>
<?php include 'include/adminsidebar.php'; ?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
                
                 <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                   $text = $fm->validation( $_POST['text']);
                   
                   
                   $text = mysqli_real_escape_string($db->link, $text);
                   
                   if($text == "" ){
                        echo "<span class='error'>Field must not be empty !.</span>";
                    }else{
                         $query = "UPDATE tbl_copyright SET  text='$text' WHERE id='1' ";
                                           
                   
                   $updated_row = $db->update($query);
                   if ($updated_row) {
                    echo "<span class='success'>Data Updated Successfully.
                    </span>";
                   }else {
                     echo "<span class='error'>Data Not Updated !</span>";
                        }
                    }
                }
                ?>
                <div class="block copyblock"> 
                 <?php
                    $query = " select * from tbl_copyright where id='1'";
                    $copyright = $db->select($query);
                    if($copyright){
                        while($result = $copyright->fetch_assoc() ){
                ?>
                 <form  action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['text'] ;?>" name="text" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php } } ?>
                </div>
            </div>
        </div>
        <?php include 'include/adminfooter.php'; ?>   
