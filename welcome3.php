
<?php 
/* welcome.php */

//$_SESSION variables become available on this page
session_start(); 
?>
<?php include 'include/header.php'; ?>
	<div class="contentsection templete clear">
		<div id="sportsbody" class="maincontent clear">
			<div class="navsports  clear">
				<ul>
					<li><a href="cricket.html">Cricket</a></li>
					<li><a href="football.html">Football</a></li>
					<li><a href="volley.html">Volley</a></li>
					<li><a id="active1" href="badminton.html">Badminton</a></li>
					<li><a href="table_tennis.html">Table Tennis</a></li>
					<li><a href="chess.html">Chess</a></li>
					<li><a  href="carrom.html">Carrom Board</a></li>
					<li><a  href="ludu.html">Ludo</a></li>
				</ul>
			</div>
			<div class="body content">
<div class="welcome">
<div style="padding:10px; color:green; font-size:16px" class="alert alert-success"><?= $_SESSION['message'] ?></div>
    <img id="wlimg" style="height:150px; width:200px" src="<?= $_SESSION['PHOTO'] ?>"><br />
   <h2 id="wlimg"> Welcome <span style="color:blue" class="user"><?= $_SESSION['NAME'] ?></span></h2>
	<br/>
	</br>
	<h1 style="padding-left:140px; color:#008465">Your Badminton Profile </h1>
	<table id="wel_tab">
	<center>
		<tr id="tb_st">
			<td>Name</td>
			<td>: <?= $_SESSION['NAME'] ?></td>
		</tr>
		<tr id="tb_st">
			<td>Department</td>
			<td>: <?= $_SESSION['DEPARTMENT'] ?></td>
		</tr>
		<tr id="tb_st">
			<td>Roll No</td>
			<td>: <?= $_SESSION['ROLL'] ?></td>
		</tr>
		<tr id="tb_st">
			<td>Registration No</td>
			<td>: <?= $_SESSION['REGISTRATION'] ?></td>
		</tr>
		<tr id="tb_st">
			<td>Email No</td>
			<td>: <?= $_SESSION['EMAIL'] ?></td>
		</tr>
		<tr id="tb_st">
			<td>Mobile No</td>
			<td>: <?= $_SESSION['MOBILE'] ?></td>
		</tr>
		<tr id="tb_st">
			<td>Sex</td>
			<td>: <?= $_SESSION['GENDER'] ?></td>
		</tr>
		<tr id="tb_st">
			<td>Action</td>
			<td>: <?= $_SESSION['ACTION'] ?></td>
		</tr>
	</center>
	</table>
	
    <?php
    $mysqli = new mysqli("localhost", "root", "", "bu_sports_club");
    $sql = "SELECT * FROM cricket";
    //$result = mysqli_result object
    $result = $mysqli->query( $sql ); 
    ?>
    
</div>
</div>
		</div>
		<div class="sidebar clear">
			<div class="search">
			<input id="src" type="text" placeholder="Search Badminton Player" name="search"/><span><button class="button2" type=button>Search</button></span>

		</div>
			<div id="side" class="samesidebar clear">
				
				<a href="carrom_profile.php"><button class="button1" type="button">Create Profile</button></a>
				<div class="p clear">
					<a href="carrom_profile.php"><img style="height:180px; width:150px; padding-left:40px; padding-bottom:15px" src="images/ch_icon.png"/></a>
					<P>You can create your player profile here. So that anyone can able to know your details. </p>
					To create your profile click the button below <a href="carrom_profile.php"><button class="button2" type="button">create profile</button></a>
				</div>	
			</div>
			<img src="images/carrom-logo.png" style="width:253px; height:50px"/>
			
			
		</div>
	
	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	  <p>&copy; Istiak Jaman.</p>
	</div>
	
</body>
</html>
