<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../library/Database.php');
	//include_once ($filepath.'/../helpers/Format.php');
	

?>
<?php
	/**
	* User class
	*/
	class User
	{
		private $db;
		private $fm;
		function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function userRegistration($data){
			$name = mysqli_real_escape_string($this->db->link, $data['name']);
			$department = mysqli_real_escape_string($this->db->link, $data['department']);
			$dejignation = mysqli_real_escape_string($this->db->link, $data['dejignation']);
			$email = mysqli_real_escape_string($this->db->link, $data['email']);
			$password = mysqli_real_escape_string($this->db->link, md5($data['password']));
			$phone = mysqli_real_escape_string($this->db->link, $data['phone']);
			$dob = mysqli_real_escape_string($this->db->link, $data['dob']);
			$gender = mysqli_real_escape_string($this->db->link, $data['gender']);

			if($name == "" || $department == "" || $dejignation == "" || $email == ""
	     || $password == "" || $phone == "" || $dob == "" || $gender == "" ){
	    	$msg = "<span class='error'>Field must not be empty !</span>";
				return $msg;
	    }
	    $mailquery = "select * from tbl_register where email = '$email' limit 1 ";
		$mailchk = $this->db->select($mailquery);
		if ($mailchk != false) {
			$msg = "<span class='error'>Email Already Exist !</span>";
				return $msg;
		}else{
			$query = "insert into tbl_register(name, department, dejignation, email, password, phone, dob, gender) values('$name', '$department',
	    	  		  '$dejignation', '$email', '$password', '$phone', '$dob', '$gender')";
			$productinsert = $this->db->insert($query);
				if($productinsert){
					$msg = "<span class='success'>User Data Inserted Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'>User Data Not Inserted !</span>";
					return $msg;
				}
		}

	}

		
	}

?>