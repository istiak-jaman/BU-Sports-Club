 <div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
       <?php
                    $query = " select * from tbl_copyright where id='1'";
                    $copyright = $db->select($query);
                    if($copyright){
                        while($result = $copyright->fetch_assoc() ){
                ?>
	  <p>&copy; <?php echo $result['text'] ;?> <?php echo date('Y');?></p>
                    <?php } } ?>
	</div>
	
</body>
</html>
