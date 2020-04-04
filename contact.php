<?php include 'include/header.php'; ?>
 <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $fm->validation($_POST['firstname']);
        $lastname  = $fm->validation($_POST['lastname']);
        $email     = $fm->validation($_POST['email']);
        $address   = $fm->validation($_POST['address']);
        $message  = $fm->validation($_POST['message']);
        
        
        $firstname = mysqli_real_escape_string($db->link, $firstname);
	$lastname  = mysqli_real_escape_string($db->link, $lastname);
        $email     = mysqli_real_escape_string($db->link, $email);
        $address   = mysqli_real_escape_string($db->link, $address);
        $message  = mysqli_real_escape_string($db->link, $message);
        
        $error ="";
            if(empty($firstname)){
                $error = " First Name must not be empty!.";
            }else if(empty($lastname)){
                $error = " Last Name must not be empty!.";
            }else if(empty($email)){
                $error = " Email must not be empty!.";
            }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error = " Invalid Email Address!!.";
            }else if(empty($address)){
                $error = " Address must not be empty!.";
            }else if(empty($message)){
                $error = " Message field not be empty!.";
            }else{
                $query = "INSERT INTO tbl_contact(firstname, lastname, email, address, message) VALUES('$firstname', '$lastname', '$email', '$address', '$message')"; 
                   
                   $inserted_rows = $db->insert($query);
                   if ($inserted_rows) {
                       $msg = "Your Message Sent Successfully.";
                   }else {
                      $error = " Message Not Sent!";
                   }
            }
        } 
    
    ?>
<div class="contentsection templete clear">
    <div class="maincontent clear">
        <div class="about">
            <h2>Contact us</h2>
            <?php
                if(isset($error)){
                    echo "<span style='color:red'>$error</span> ";
                }
                if(isset($msg)){
                    echo "<span style='color:green'>$msg</span> ";
                }
         
            ?>
          <form action="" method="post">  
           <table>
            <tr>
                    <td>Your First Name:</td>
                    <td>
                    <input type="text" name="firstname" placeholder="Enter first name"/>
                    </td>
            </tr>
            <tr>
                    <td>Your Last Name:</td>
                    <td>
                    <input type="text" name="lastname" placeholder="Enter Last name"/>
                    </td>
            </tr>

            <tr>
                    <td>Your Email Address:</td>
                    <td>
                    <input type="email" name="email" placeholder="Enter Email Address"/>
                    </td>
            </tr>
            <tr>
                    <td>Your Address:</td>
                    <td>
                    <textarea name="address" placeholder="Enter Your Address.."></textarea>
                    </td>
            </tr>
            <tr>
                    <td>Your Message:</td>
                    <td>
                        <textarea name="message" placeholder="Enter Your Message"></textarea>
                    </td>
            </tr>
            <tr>
                    <td></td>
                    <td>
                    <input type="submit" name="submit" value="Send"/>
                    </td>
            </tr>
            </table>
            </form>     
                
         </div>

</div>
<?php include 'include/sidebar.php'; ?>
<?php include 'include/footer.php'; ?>