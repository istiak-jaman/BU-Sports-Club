<?php include'S_inc/header.php';?>
<?php
    
    if (!isset($_GET['proid']) || $_GET['proid'] == NULL ) {
        header("Location: s_404.php");
    }else{
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['proid']);
    }
  
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $quantity = $_POST['quantity'];
        $addCart = $ct->addToCart($quantity, $id);
    }
    

?>
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">	
						<?php
							$getPd = $pd->getSingleProduct($id);
							if ($getPd) {
								while ($result = $getPd->fetch_assoc()) {
								 		 	
								 
						?>	
					<div class="grid images_3_of_2">
						<img src="admin/<?php echo $result['image'];?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result['productName'];?></h2>
					<div class="price">
						<p>Price: <span>BDT <?php echo $result['price'];?></span></p>
						<p>Category: <span><?php echo $result['proCatName'];?></span></p>
						<p>Brand:<span><?php echo $result['brandName'];?></span></p>
					</div>
				<div class="add-cart">
					<form action="" method="post">
						<input type="number" class="buyfield" name="quantity" value="1"/>
						<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
					</form>				
				</div>
				<span style ="color:red; font-size:20px;" >
					<?php 
						if (isset($addCart)) {
							echo $addCart;
						}

					?>
				</span>
			</div>
			<div class="product-desc">
			<h2>Product Details</h2>
			<?php echo $result['body'];?>
	    	</div>
		<?php } }?>
	</div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
						<?php
							$getCat = $cat->getAllCat();
							if ($getCat) {
								while ($result = $getCat->fetch_assoc()) {
									
								
						?>
				      <li><a href="productbycat.php?catId=<?php echo $result['proCatId'];?>"><?php echo $result['proCatName'];?></a></li>
				      <?php } }?>
    				</ul>
    	
 				</div>
 		</div>
 	</div>
	</div>
   <?php include'S_inc/footer.php';?>  