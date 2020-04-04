 
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css">
 <?php
    $query = "select * from tbl_theme where id = 1 ";
    $themes = $db->select($query);

    while($result = $themes->fetch_assoc()){
        if($result['theme'] == 'default'){ ?>
            <link rel="stylesheet" href="theme/default.css">
        <?php }else if($result['theme'] == 'golden') {?>
            <link rel="stylesheet" href="theme/golden.css">
        <?php }else if($result['theme'] == 'gray') {?>
            <link rel="stylesheet" href="theme/gray.css">
        <?php }?>
   <?php }?>