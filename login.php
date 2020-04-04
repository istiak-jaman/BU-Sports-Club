<?php include 'include/header.php'; ?>

<?php


?>
<?php
    $login = Session::get("cuslogin");
    if ($login == true) {
        header("Location:order.php");
    }
?>
<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']) ){
         $email = $_POST['email'];
         $password = $_POST['pass'];
        $custLogin = $cmr->customerLogin($email,$password);
    }

?>
	<div class="contentsection templete clear">
		<div  class="maincontent clear">
			<?php
                if (isset($custLogin )) {
                    echo $custLogin ;
                }

            ?>
 	      <!--   <h3>Existing Users</h3>
            <p>Sign in with the form below.</p>
            <form action="" method="post" >
                <input name="email" placeholder="Email" type="text"/>
                <input name="pass" placeholder="Password" type="password"/>
                <div class="buttons" ><div><button class="grey" name="login">Sign In</button></div></div>
             </form> -->


		</div>
<?php include 'include/sidebar.php'; ?>
<?php include 'include/footer.php'; ?>
