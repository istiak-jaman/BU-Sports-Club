<?php include 'config/config.php'?>
<?php include 'library/database.php'?>
<?php include 'helper/Format.php'?>


<?php
    include 'library/Session.php';
   // Session::init();
    spl_autoload_register(function($class){
        include_once "classes/".$class.".php";
    });

?>


<?php
    $db = new Database();
    $fm = new Format();
    $usr = new User();
    $cmr = new Customer();
    $ct = new Cart();

?>
<!DOCTYPE html>
<html>
<head>
    
<?php include 'script/meta.php'; ?>
<?php include 'script/css.php'; ?>
<?php include 'script/js.php'; ?>

</head>

<body>
    <div class="headersection templete clear">
        <a href="index.php">
            <div class="logo">
                 <?php
                    $query = " select * from title_slogan where id='1'";
                    $blog_title = $db->select($query);
                    if($blog_title){
                        while($result = $blog_title->fetch_assoc() ){
            ?>
                    <img src="admin/<?php echo $result['logo']; ?>" alt="Logo"/>
                    <h2><?php echo $result['title']; ?></h2>
                    <p style="color:black;"><?php echo $result['slogan']; ?></p>
                    <?php } } ?>
            </div>
        </a>
        <div class="social">
             <?php
            $query = " select * from tbl_social where id='1'";
            $social = $db->select($query);
            if($social){
                while($result = $social->fetch_assoc() ){
        ?> 
                <a href="<?php echo $result['fb'] ;?>" target="_blank"><img id="twt" src="images/social/fb.png" alt="Facebook"/></a>
                <a href="<?php echo $result['tw'] ;?>" target="_blank"><img id="twt" src="images/social/twt.png" alt="Twitter"/></a>
                <a href="<?php echo $result['ln'] ;?>" target="_blank"><img id="twt" src="images/social/bing.png" alt="LinkedIn"/></a>
                <a href="<?php echo $result['gp'] ;?>" target="_blank"><img id="insta" src="images/social/instagram.png" alt="GooglePlus"/></a> 
        <?php } }?>
        </div>
    </div>
 <div class="navsection templete clear">
     <?php
         $path = $_SERVER['SCRIPT_FILENAME'];
        $cpage = basename($path, '.php');
     ?>
    <ul>
            <li><a
                <?php if($cpage == 'index'){echo 'id="active"';} ?>
                href="index.php">Home</a>
            </li>
            <li><a
                 <?php if($cpage == 'gallary'){echo 'id="active"';} ?>
                 href="gallary.php">Gallary</a>
            </li>
            <li><a 
                 <?php if($cpage == 'event'){echo 'id="active"';} ?>
                href="event.php">Events</a>
            </li>
            <li><a 
                <?php if($cpage == 'about'){echo 'id="active"';} ?>
                href="about.php">About</a>
            </li>
            <li><a 
                 <?php if($cpage == 'contact'){echo 'id="active"';} ?>
                href="contact.php">Contact</a>
            </li>
            <li><a
                 <?php if($cpage == 'privacy'){echo 'id="active"';} ?>
                 href="privacy.php">Privacy</a>
            </li>
            
            <li><a 
                <?php if($cpage == 'sports' || $cpage == 'cricket' || $cpage == 'football' || $cpage == 'volley' ||
                        $cpage == 'badminton' || $cpage == 'table_tennis' || $cpage == 'chess' ||
                        $cpage == 'carrom' || $cpage == 'ludu'){echo 'id="active"';} ?>
                href="sports.php">Sports</a>
            </li>
            <li><a
                <?php if($cpage == 'shop'){echo 'id="active"';} ?>
                 href="shop.php">Shop</a>
            </li>
            <?php
                    if (isset($_GET['cid'])) {
                        $delData = $ct->delCustomerCart();
                        Session::L_destroy();
                    }

               ?>
            <li>
                <?php
                      $login = Session::get("cuslogin");
                      if ($login == false) { ?>

                <a
                <?php if($cpage == 'login'){echo 'id="active"';} ?>
                 href="login.php">Login</a>
                <?php }  else { ?>
                    <a 
                    <?php if($cpage == 'login'){echo 'id="active"';}?>
                     href="?cid=<?php Session::get('cmrId');?>">Logout</a>
          <?php  } ?>
            </li>
    </ul>
			
</div>
	
