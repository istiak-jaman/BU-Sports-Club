<?php include 'S_inc/header.php';?>
<style>

	.cat1 {
	width: 700px;
	margin: 0 auto;
	margin-top: 50px;
	background: #ddd;
	padding: 30px;
	border: #d3d3d3;
	border-radius: 5px;
	text-align: center;
}

.cat1 h2 {
	font-size: 37px;
	font-weight: bold;
	color: navy;
	margin-bottom: 50px;
	font-style: italic;
}
.cat {
	width: 500px;
	margin: 0 auto;
	background: #e6e6e6;
	border: #fff;
	border-radius: 5px;
	text-align: justify;
}
.cat1 ul li {
	margin-bottom: 10px;
	padding: 10px;
}
.cat a {
	font-size: 20px;
	color: red;
	font-weight: bold;
}

</style>

 <div class="main">
    	<div class="cat1">
					<h2>CATEGORIES</h2>
					<ul>
						<?php
							$getCat = $cat->getAllCat();
							if ($getCat) {
								$i = 0;
								while ($result = $getCat->fetch_assoc()) {
									
								$i++;
						?>
				      <li class="cat"><a href="productbycat.php?catId=<?php echo $result['proCatId'];?>"><?php echo $i; ?>. <?php echo $result['proCatName'];?></a></li>
				      <?php } }?>
    				</ul>
    	
 				</div>
 	</div>
 </div>
<?php include 'S_inc/footer.php';?>	