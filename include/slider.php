

<div class="slidersection templete clear">
    <div style="float:left;" id="slider">
            
        <?php 
            $query = " select * from tbl_slider order by id limit 5";
            $slider = $db->select($query);
            if($slider){
                $i=0;
                while($result = $slider->fetch_assoc()){
              
        ?>
            <a href="#"><img src="admin/<?php echo $result['image']; ?>" alt="<?php echo $result['title']; ?>" title="<?php echo $result['title']; ?>" /></a>
            
        <?php } }?>

            
        

    </div>
    <div class="bb">
        <a ><img src="images/product.png" height="" width=""></a>
    </div>
</div>


