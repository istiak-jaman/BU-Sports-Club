
<?php include 'include/adminheader.php'; ?>
<?php include 'include/adminsidebar.php'; ?>
<?php
    if(!isset($_GET['viewpostid']) || $_GET['viewpostid'] == NULL){
        echo "<script>window.location = 'postlist.php'; </script>";
       // header("Location:postlist.php");
        
    }else{
        $postid = $_GET['viewpostid'];
    }
?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>View Post</h2>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                   echo "<script>window.location = 'postlist.php'; </script>";
                }
            ?> 
                
                <div class="block">  
             <?php
                $query = "select * from tbl_post where id = '$postid' order by id desc ";
                $getpost = $db->select($query);
                if($getpost){
                    while($postresult = $getpost->fetch_assoc()){
                    
                
             ?>
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" readonly value ="<?php echo $postresult['title']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
                                    <option>Select Category</option>
                            <?php
                                $query = "select * from tbl_category";
                                $category = $db->select($query);
                                
                                if($category){
                                    while($result = $category->fetch_assoc()){
                           
                                        
                                     ?>
                                    <option
                                  <?php
                                    if($postresult['cat'] == $result['id']){ ?>
                                        selected="selected"
                                    <?php  } ?>
                                 value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                                <?php }}?>
                                </select>
                            </td>
                        </tr>
                   
                    
                       
                        <tr>
                            <td>
                                <label>Image</label>
                            </td>
                            <td>
                                <img src="<?php echo $postresult['image']; ?>" height="100px" width="150px"/><br/>
                                
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body" class="tinymce"><?php echo $postresult['body']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $postresult['tags']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $postresult['author']; ?>" class="medium" />
                                <input type="hidden" name="userid" value="<?php echo Session::get('userid') ; ?>" class="medium" />
                            </td>
                        </tr>
                        
			<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="OK" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php } } ?> 
                </div>
            </div>
        </div>
 <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
    <!-- Load TinyMCE -->
 <?php include 'include/adminfooter.php'; ?> 

