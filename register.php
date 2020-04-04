<?php include 'include/header.php'; ?>

	<div class="contentsection templete clear">
		<div  class="maincontent clear">

			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
					$userReg = $usr->userRegistration($_POST);
				}

			?>
			<div class="pr_body clear">
				<?php
					if(isset($userReg)){
						echo $userReg;
					}

				?>
                        <center>
						<form class="form" action="" method="post">                          
						<table id="cr_tb">
						<h1 id="th1" style="color:#6cc0cb">Register New Account</h1>
                                <tr id="cr_tr">
                                    <td>Name </td>
                                    <td>
                                        : <input placeholder="Enter your Name" type="text" name="name">
                                    </td>
                                </tr>
                                <tr id="cr_tr">
                                    <td>Department </td>
                                    <td>
                                        :  <input placeholder="Enter your Name" type="text" name="name">
                                    </td>
                                </tr>
                                
                                <tr id="cr_tr">
                                    <td>Dejignation </td>
                                    <td>
                                       : <select id="cr_sel" name="dejignation">
                                            <option value="teacher">Teacher</option>
                                            <option value="stdnt">Student</option>
                                         </select>
                                    </td>
                                </tr>
                              
                                <tr id="cr_tr">
                                    <td>Email </td>
                                    <td>
                                       : <input placeholder="Enter your Email" type="email" name="email">
                                    </td>
                                </tr>
                                <tr id="cr_tr">
                                    <td>Password </td>
                                    <td>
                                       : <input placeholder="Enter your Password" type="password" name="password">
                                    </td>
                                </tr>
                                <tr id="cr_tr">
                                    <td>Mobile No </td>
                                    <td>
                                       : <input placeholder="Enter your Mobile No" type="text" name="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth </td>
                                    <td>
                                        : <input id="cr_sel" type="date" name="dob">
                                    </td>
                                </tr>
                                <tr id="cr_tr">
                                    <td>Gender</td>
                                    <td id="cr_td">
                                        : <input type="radio" name="gender" value="male"> Male
                                          <span><input type="radio" name="gender" value="female"> Female</span>
                                          <input type="radio" name="gender" value="other"> Others
                                    </td>
                                </tr>
                                
                      
                            </table>
                           <br/>
                            <input type="checkbox" value="check" name="check"> I agree with all terms and condition.<br/><br/>
                            <input class="but" type="submit" name="button" value="Create Profile">
                        </form>
                        </center>
                    </div>
		</div>
<?php include 'include/sidebar.php'; ?>
<?php include 'include/footer.php'; ?>