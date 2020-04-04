<div class="header_bottom">

		<div class="header_bottom_left">
			<div class="section group">
				<?php
					$getIphone = $pd->latestFromNike();
					if ($getIphone) {
						while ($result = $getIphone->fetch_assoc()) {
							
				?>

				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId'];?>"> 
						 	<img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Nike</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php } }?>

			   <?php
					$getSamsung = $pd->latestFromAdidas();
					if ($getSamsung) {
						while ($result = $getSamsung->fetch_assoc()) {
							
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?proid=<?php echo $result['productId']; ?>">
						  	<img src="admin/<?php echo $result['image']; ?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Adidas</h2>
						  <p><?php echo $result['productName']; ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
					</div>
				</div>
				<?php } }?>

			</div>
				
			
			<div class="section group">

				<?php
					$getAcer = $pd->latestFromNivia();
					if ($getAcer) {
						while ($result = $getAcer->fetch_assoc()) {
							
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId']; ?>">
						  	<img src="admin/<?php echo $result['image']; ?>" alt="" / ></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Nivia</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
			   <?php } }?>


			   	<?php
					$getCanon = $pd->latestFromYonex();
					if ($getCanon) {
						while ($result = $getCanon->fetch_assoc()) {
							
				?>		
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?proid=<?php echo $result['productId']; ?>">
						  	<img src="admin/<?php echo $result['image']; ?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Yonex Pro</h2>
						  <p><?php echo $result['productName']; ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
					</div>
				</div>
				 <?php } }?>
			</div>
		  <div class="clear"></div>
		</div>
		<div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="S_images/images/1.jpg" alt=""/></li>
						<li><img src="S_images/images/2.jpg" alt=""/></li>
						<li><img src="S_images/images/3.jpg" alt=""/></li>
						<li><img src="S_images/images/4.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>	  
  </div>