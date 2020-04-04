

<?php include 'include/header.php'; ?>
<?php
    if(!isset($_GET['search']) || $_GET['search'] == NULL ){
        header("Location: 404.php");
    }else {
        $search = $_GET['search'];
    }
?>





<div class="contentsection templete clear">
        <div class="maincontent clear">
        
        <?php
           $query = "SELECT * FROM tbl_post WHERE title LIKE '%$search%' OR body LIKE '%$search%'";
           $post = $db->select($query);
           if($post){
               while($result = $post->fetch_assoc()){
        
        ?>    
    <div class="samepost clear">
        <h2 style="color:#008465"><a style="text-decoration: none;" href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title']; ?></a></h2>
        <h4><?php echo $fm->formatDate($result['date']);?>, By <a style="text-decoration: none; color:navy;" href="#"><?php echo $result['author'];?></a></h4>
         <a href="#"><img style="height:120px" src="admin/<?php echo $result['image']; ?>" alt="post image"/></a>
         <?php echo $fm->textShorten($result['body'], 300);?>
        <div class="readmore clear">
                <a href="post.php?id=<?php echo $result['id'];?>">Read More</a>
        </div>
    </div>
               <?php }?> <!--end while Loop-->
               
               
           <?php } else {  ?>
               <p>Your Search Not Found..!!</p>
           <?php } ?>
         
        </div> 			
<?php include 'include/sidebar.php'; ?>
 
<?php include 'include/footer.php'; ?>



