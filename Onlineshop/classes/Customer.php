<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../library/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	

?>
<?php
/**
* User class
*/
class Customer
{
	
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function customerRegistration($data){
		$name         = $this->fm->validation($data['name']);
		$address      = $this->fm->validation($data['address']);
		$city         = $this->fm->validation($data['city']);
		$country      = $this->fm->validation($data['country']);
		$zip          = $this->fm->validation($data['zip']);
		$phone        = $this->fm->validation($data['phone']);
		$email        = $this->fm->validation($data['email']);
		$password     = $this->fm->validation($data['password']);
		


		$name     = mysqli_real_escape_string($this->db->link, $data['name']);
		$address  = mysqli_real_escape_string($this->db->link, $data['address']);
		$city     = mysqli_real_escape_string($this->db->link, $data['city']);
		$country  = mysqli_real_escape_string($this->db->link, $data['country']);
		$zip      = mysqli_real_escape_string($this->db->link, $data['zip']);
		$phone    = mysqli_real_escape_string($this->db->link, $data['phone']);
		$email    = mysqli_real_escape_string($this->db->link, $data['email']);
		$password = mysqli_real_escape_string($this->db->link, md5($data['password']));

		if($name == "" || $address == "" || $city == "" || $country == ""
	     || $zip == "" || $phone == "" || $email == "" || $password == "" ){
	    	$msg = "<span class='error'>Field must not be empty !</span>";
				return $msg;
	    }
		
		$mailquery = "select * from tbl_customer where email = '$email' limit 1 ";
		$mailchk = $this->db->select($mailquery);
		if ($mailchk != false) {
			$msg = "<span class='error'>Email Already Exist !</span>";
				return $msg;
		}else{
			$query = "insert into tbl_customer(name, address, city, country, zip, phone, email, password) values('$name', '$address',
	    	  		  '$city', '$country', '$zip', '$phone', '$email', '$password')";
			$productinsert = $this->db->insert($query);
				if($productinsert){
					$msg = "<span class='success'>Customer Data Inserted Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'>Customer Data Not Inserted !</span>";
					return $msg;
				}
		}

	}


	public function customerLogin($email,$password){

		$email        = $this->fm->validation($email);
		$password     = $this->fm->validation($password);

		$email    = mysqli_real_escape_string($this->db->link, $email);
		$password = mysqli_real_escape_string($this->db->link, md5($password));

		if (empty($email) || empty($password) ) {
			$msg = "<span class='error'>Field must not be empty !!</span>";
				return $msg;
		}

		$query = "select * from tbl_customer where email='$email' 
					AND password='$password' ";

		$result = $this->db->select($query);
		if ($result != false) {
			$value = $result->fetch_assoc();
			Session::set("cuslogin", true);
			Session::set("cmrId", $value['id']);
			Session::set("cmrName", $value['name']);
			header("Location:cart.php");

		}else{
			$msg = "<span class='error'>Email or Password Not Matched !!</span>";
			return $msg;
		}


	}

	public function getCustomerData($id){
		$query = "select * from tbl_customer where id = '$id' ";
		$result = $this->db->select($query);
		return $result;

	}



	public function customerUpdate($data, $cmrId){
		$name         = $this->fm->validation($data['name']);
		$address      = $this->fm->validation($data['address']);
		$city         = $this->fm->validation($data['city']);
		$country      = $this->fm->validation($data['country']);
		$zip          = $this->fm->validation($data['zip']);
		$phone        = $this->fm->validation($data['phone']);
		$email        = $this->fm->validation($data['email']);
		
		


		$name     = mysqli_real_escape_string($this->db->link, $data['name']);
		$address  = mysqli_real_escape_string($this->db->link, $data['address']);
		$city     = mysqli_real_escape_string($this->db->link, $data['city']);
		$country  = mysqli_real_escape_string($this->db->link, $data['country']);
		$zip      = mysqli_real_escape_string($this->db->link, $data['zip']);
		$phone    = mysqli_real_escape_string($this->db->link, $data['phone']);
		$email    = mysqli_real_escape_string($this->db->link, $data['email']);
		

		if($name == "" || $address == "" || $city == "" || $country == ""
	     || $zip == "" || $phone == "" || $email == ""  ){
	    	$msg = "<span class='error'>Field must not be empty !</span>";
				return $msg;
	    }
		
		else{

			$query = "update tbl_customer
						 SET 
						 name     =  '$name',
						 address  =  '$address',
						 city     =  '$city',
						 country  =  '$country',
						 zip      =  '$zip',
						 phone    =  '$phone',
						 email    =  '$email'

						 where id='$cmrId'";
				$updated_row = $this->db->update($query);
				if ($updated_row) {
					$msg = "<span class='success'>Customer Data Updated Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'>Customer Data Not Updated !</span>";
					return $msg;
				}
		}

	}

	
}
?>