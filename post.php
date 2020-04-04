<?php include 'include/header.php'; ?>

<?php
    if(!isset($_GET['id']) || $_GET['id'] == NULL){
        header("Location: 404.php");
    } else{
        $id = $_GET['id'];
    }
?>



<div class="contentsection templete clear">
    <div class="maincontent clear">
        <div class="about">
            <?php
            $query = "select * from tbl_post where id=$id";
            $post = $db->select($query);
            if($post){
                while($result = $post->fetch_assoc()){
            ?>
            <h2><?php echo $result['title']; ?> </h2>
            <h4><?php echo $fm->formatDate($result['date']);?>, By <a style="text-decoration: none; color:navy;" href="#"><?php echo $result['author'];?></a></h4>
            <img style="height:120px" src="admin/<?php echo $result['image']; ?>"alt="post image"/>
            <?php echo  $result['body']; ?>
            <?php } } else { header("Location: 404.php");} ?>
            <div class="relatedpost clear">
                <h2>Related articles</h2>
                <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
                <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
                <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
                <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
                <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
                <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
            </div>
        </div>

    </div>
<?php include 'include/sidebar.php'; ?>
<?php include 'include/footer.php'; ?>