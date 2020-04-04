<?php
    include 'library/Session.php';
    Session::init();
?>
<?php
	
	include 'library/database.php';
	include 'helper/Format.php';

	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";

	});

	$db = new Database();
	$fm = new Format();
	$cat = new ProductCategory();
	$pd = new Product();
	$ct = new Cart();
	$cmr = new Customer();

?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE HTML>
<head>
<title>Store Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css_shop/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css_shop/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js_shop/jquerymain.js"></script>
<script src="js_shop/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js_shop/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js_shop/nav.js"></script>
<script type="text/javascript" src="js_shop/move-top.js"></script>
<script type="text/javascript" src="js_shop/easing.js"></script> 
<script type="text/javascript" src="js_shop/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/busc.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
								<span class="no_product">

									<?php
										$getData = $ct->checkCartTable();
										if ($getData) {
											$sum = Session::get("sum");
											$qty = Session::get("qty");
											echo "$sum TK | Qty: ".$qty;
										}else{
											echo "(Empty)";
										}
									?>

								</span>
							</a>
						</div>
			      </div>

			   <?php
			   		if (isset($_GET['cid'])) {
			   			$delData = $ct->delCustomerCart();
			   			Session::destroy();
			   		}

			   ?>
		   <div class="login">
		   		<?php
					  $login = Session::get("cuslogin");
					  if ($login == false) { ?>
					    <a href="S_login.php">Login</a>
					 
				<?php  }else{?>
					<a href="?cid=<?php Session::get('cmrId');?>">Logout</a>

				<?php }?>
		   		

		   </div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
 			 <div class="navsection  clear">
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
            
    </ul>
			
</div>

<div class="menu">
	<ul id="dc_mega-menu-orange " class="dc_mm-orange ">
	  <li><a href="shop.php">Store</a></li>
	  <li><a href="productcategory.php">Categories</a></li>
	  <li><a href="topbrands.php">Top Brands</a> </li>
	  

	  <?php
	  		$chkCart = $ct->checkCartTable();
	  		if ($chkCart) { ?>
	  
	  <li><a href="cart.php">Cart</a></li>
	  <li><a href="payment.php">Payment</a></li>
	  <?php } ?>
	  <?php
	  		$cmrId = Session::get('cmrId');
	  		$chkOrder = $ct->checkOrder($cmrId);
	  		if ($chkOrder) { ?>
	  <li><a href="orderdetails.php">Your Order</a></li>
	  <?php } ?>
	  <?php
	  		$login = Session::get('cuslogin');
	  		if ($login == true) {
	  			
	  ?>
	  <li><a href="profile.php">Profile</a> </li>
	  <?php } ?>

	  <li><a href="contact.php">Contact</a> </li>
	  <div class="clear"></div>
	</ul>
</div>