<?php 
    include '../library/Session.php';
    Session::checkSession();
?>
<?php include '../config/config.php'?>
<?php include '../library/database.php'?>
<?php include '../helper/Format.php'?>


<?php
    $db = new Database(); 
?>
<?php
    if(!isset($_GET['sliderid']) || $_GET['sliderid'] == NULL){
        echo "<script>window.location = 'sliderlist.php'; </script>";
       // header("Location:postlist.php");
        
    }else{
        $sliderid = $_GET['sliderid'];
        
        $query = "select * from tbl_slider where id='$sliderid'";
        $getData = $db->select($query);
        
        if($getData){
            while($delimg = $getData->fetch_assoc() ){
                $dellink = $delimg['image'];
                unlink($dellink);
            }
        }
        
        $delquery = "delete from tbl_slider where id = '$sliderid'";
        $delData = $db->delete($delquery);
        if($delData){
            echo "<script>alert('Slider Deleted Successfully.')</script>";
            echo "<script>window.location = 'sliderlist.php'; </script>";
        }else{
            echo "<script>alert('Slider Not Deleted.')</script>";
            echo "<script>window.location = 'sliderlist.php'; </script>";
        }
    }
?>
    

