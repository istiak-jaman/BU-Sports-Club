<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../library/database.php');
	include_once ($filepath.'/../helper/Format.php');
	

?>
<?php
/**
* Cart class
*/
class Cart
{
	
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function addToCart($quantity, $id){
		$quantity  = $this->fm->validation($quantity);
		$quantity  = mysqli_real_escape_string($this->db->link, $quantity);
		$productId = mysqli_real_escape_string($this->db->link, $id);
		$sId       = session_id();    


		$squery = "select * from tbl_product where productId = '$productId' ";
		$result = $this->db->select($squery)->fetch_assoc();

		$productName = $result['productName'];
		$price       = $result['price'];
		$image       = $result['image'];

		$checkquery = "select * from tbl_cart where productId = '$productId' and 
						sId='$sId'";
		$getPro = $this->db->select($checkquery);
		if ($getPro) {
			$msg = "Product Already Added !";
			return $msg;
		}else{

		$query = "insert into tbl_cart(sId, productId, productName, price, quantity, image) 
					values('$sId', '$productId',
	    	  		  '$productName', '$price',  '$quantity','$image')";
		$inserted_row = $this->db->insert($query);
			if($inserted_row){
				header("Location:cart.php");
			}else{
				header("Location:404.php");
			}
		}
	}


	public function getCartProduct(){
		$sId       = session_id(); 
		$query = "select * from tbl_cart where sId='$sId'";
		$result = $this->db->select($query);
		return $result;

	}

	public function updateCartQuantity($cartId, $quantity){
		$cartId = $this->fm->validation($cartId);
		$quantity = $this->fm->validation($quantity);

		$cartId = mysqli_real_escape_string($this->db->link, $cartId);
		$quantity = mysqli_real_escape_string($this->db->link, $quantity);

		$query = "update tbl_cart
						 SET 
						 quantity='$quantity'
						 where cartId='$cartId'";
				$updated_row = $this->db->update($query);
				if ($updated_row) {
					header("Location:cart.php");
				}else{
					$msg = "<span class='error' >Quantity Not Updated !</span>";
					return $msg;
				}

	}

	public function delProductByCart($delId){
		$delId = mysqli_real_escape_string($this->db->link, $delId);
		$query = "delete from tbl_cart where cartId = '$delId'";
		$deldata = $this->db->delete($query);
		if ($deldata) {
			echo "<script>window.location = 'cart.php';</script>";
		}else{
			$msg = "<span class='error'>Product Not Deleted !</span>";
			return $msg;
		}

	}

	public function checkCartTable(){
		$sId       = session_id(); 
		$query = "select * from tbl_cart where sId = '$sId' ";
		$result = $this->db->select($query);
		return $result;
	}

	public function delCustomerCart(){
		$sId = session_id();
		$query = "delete from tbl_cart where sId= '$sId'";
		$this->db->delete($query);
	}

	public function orderProduct($cmrId){
		$sId       = session_id(); 
		$query = "select * from tbl_cart where sId = '$sId' ";
		$getPro = $this->db->select($query);
		if ($getPro) {
			while ($result   = $getPro->fetch_assoc()) {
				$productId   = $result['productId'];
				$productName = $result['productName'];
				$quantity    = $result['quantity'];
				$price       = $result['price'] * $quantity;
				$image 		 = $result['image'];



				$query = "insert into tbl_order(cmrId, productId, productName,  quantity,price, image) 
					values('$cmrId', '$productId',
	    	  		  '$productName',   '$quantity','$price', '$image')";
				$inserted_row = $this->db->insert($query);

			}
		}

	}

	public function payableAmount($cmrId){
		$query = "select price from tbl_order where cmrId = '$cmrId' AND date=now() ";
		$resut = $this->db->select($query);
		return $resut;

	}
	
	public function getOrderProduct($cmrId){
		$query = "select * from tbl_order where cmrId = '$cmrId' order by date desc ";
		$resut = $this->db->select($query);
		return $resut;

	}
	public function checkOrder($cmrId){
		
		$query = "select * from tbl_order where cmrId = '$cmrId' ";
		$result = $this->db->select($query);
		return $result;
	}

	public function getAllOrderProduct(){

		$query = "select * from tbl_order ORDER BY date DESC ";
		$result = $this->db->select($query);
		return $result;
	}

	public function productShifted($id ,$time, $price ){
		$id    = mysqli_real_escape_string($this->db->link, $id);
		$time  = mysqli_real_escape_string($this->db->link, $time);
		$price = mysqli_real_escape_string($this->db->link, $price);

		$query = "update tbl_order
						 SET 
						 status = '1'
						 where cmrId='$id' AND date='$time' AND price='$price' ";
				$updated_row = $this->db->update($query);
				if ($updated_row) {
					$msg = "<span class='success'> Updated Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'> Not Updated !</span>";
					return $msg;
				}

	}

	public function removeProductShifted($id ,$time, $price ){
		$id    = mysqli_real_escape_string($this->db->link, $id);
		$time  = mysqli_real_escape_string($this->db->link, $time);
		$price = mysqli_real_escape_string($this->db->link, $price);
		$query = "delete from tbl_order where cmrId='$id' AND date='$time' AND price='$price'";
		$deldata = $this->db->delete($query);
		if ($deldata) {
			$msg = "<span class='success'>Order Deleted Successfully.</span>";
					return $msg;
		}else{
			$msg = "<span class='error'> Not Deleted !</span>";
			return $msg;
		}

	}

	public function productShiftConfirm($id ,$time, $price ){
		$id    = mysqli_real_escape_string($this->db->link, $id);
		$time  = mysqli_real_escape_string($this->db->link, $time);
		$price = mysqli_real_escape_string($this->db->link, $price);

		$query = "update tbl_order
						 SET 
						 status = '2'
						 where cmrId='$id' AND date='$time' AND price='$price' ";
				$updated_row = $this->db->update($query);
				if ($updated_row) {
					$msg = "<span class='success'> Updated Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'> Not Updated !</span>";
					return $msg;
				}

	}

}
?>