<?php
        if(isset($_GET['id'])){
            $postid = $_GET['id'];
            $query = "select * from tbl_post where id='$postid' ";
            $posts = $db->select($query);
            if($posts){
                while($result = $posts->fetch_assoc()){ ?>
                    <title><?php echo $result['title']; ?>-<?php echo TITLE; ?></title>
                
        <?php    } } }    else { ?>
        <title><?php echo $fm->title(); ?>-<?php echo TITLE; ?></title>
        <?php } ?>
	<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<?php
     if(isset($_GET['id'])){
          $keywordid = $_GET['id'];
          $query = "select * from tbl_post where id='$keywordid' ";
            $keywords = $db->select($query);
          if($keywords){
              while($result = $keywords->fetch_assoc()){ ?>
                  <meta name="keywords" content="<?php echo $result['tags']; ?>">
          <?php     } }  } else{ ?>
                            <meta name="keywords" content="<?php echo KEYWORDS; ?>">
         <?php }?>