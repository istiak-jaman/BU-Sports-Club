<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../library/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	

?>
<?php
/**
* Product class
*/
class Product
{
	
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function productInsert($data, $file){
		$productName = $this->fm->validation($data['productName']);
		$catId       = $this->fm->validation($data['catId']);
		$brandId     = $this->fm->validation($data['brandId']);
		$body        = $this->fm->validation($data['body']);
		$price       = $this->fm->validation($data['price']);
		$type        = $this->fm->validation($data['type']);
		


		$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
		$catId       = mysqli_real_escape_string($this->db->link, $data['catId']);
		$brandId     = mysqli_real_escape_string($this->db->link, $data['brandId']);
		$body        = mysqli_real_escape_string($this->db->link, $data['body']);
		$price       = mysqli_real_escape_string($this->db->link, $data['price']);
		$type        = mysqli_real_escape_string($this->db->link, $data['type']);



		$permited  = array('jpg', 'jpeg', 'png', 'gif');
	    $file_name = $file['image']['name'];
	    $file_size = $file['image']['size'];
	    $file_temp = $file['image']['tmp_name'];

	    $div = explode('.', $file_name);
	    $file_ext = strtolower(end($div));
	    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
	    $uploaded_image = "upload/".$unique_image;

	    if($productName == "" || $catId == "" || $brandId == "" || $body == ""
	     || $price == "" || $type == "" || $file_name == "" ){
	    	$msg = "<span class='error'>Field must not be empty !</span>";
				return $msg;
	    }elseif ($file_size >1048567) {
	     echo "<span class='error'>Image Size should be less then 1MB!
	     </span>";
	    } elseif (in_array($file_ext, $permited) === false) {
	     echo "<span class='error'>You can upload only:-"
	     .implode(', ', $permited)."</span>";
	    } else{
	    	 move_uploaded_file($file_temp, $uploaded_image);
	    	 $query = "insert into tbl_product(productName, catId, brandId, body, price, image, type ) values('$productName', '$catId',
	    	  		  '$brandId', '$body', '$price', '$uploaded_image', '$type')";
			$productinsert = $this->db->insert($query);
				if($productinsert){
					$msg = "<span class='success'>Product Inserted Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'>Product Not Inserted !</span>";
					return $msg;
				}
	    }
		 

	}

	public function getAllProduct(){
		$query = "select p.*, c.catName, b.brandName
					from tbl_product as p , tbl_category as c, tbl_brand as b
					where p.catId = c.catId and p.brandId = b.brandId
					order by p.productId desc";
		/*
		$query = "select  tbl_product.*, tbl_category.catName, tbl_brand.brandName
				 from tbl_product
				 inner join tbl_category
				 ON tbl_product.catId = tbl_category.catId
				 inner join tbl_brand
				 ON tbl_product.brandId = tbl_brand.brandId
				 order by tbl_product.productId desc";
				 */
		$result = $this->db->select($query);
		return $result;

	}

	public function getProById($id){
		$query = "select * from tbl_product where productId='$id'";
		$result = $this->db->select($query);
		return $result;
	}

	public function productUpdate($data, $file, $id){
		$productName = $this->fm->validation($data['productName']);
		$catId       = $this->fm->validation($data['catId']);
		$brandId     = $this->fm->validation($data['brandId']);
		$body        = $this->fm->validation($data['body']);
		$price       = $this->fm->validation($data['price']);
		$type        = $this->fm->validation($data['type']);
		


		$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
		$catId       = mysqli_real_escape_string($this->db->link, $data['catId']);
		$brandId     = mysqli_real_escape_string($this->db->link, $data['brandId']);
		$body        = mysqli_real_escape_string($this->db->link, $data['body']);
		$price       = mysqli_real_escape_string($this->db->link, $data['price']);
		$type        = mysqli_real_escape_string($this->db->link, $data['type']);



		$permited  = array('jpg', 'jpeg', 'png', 'gif');
	    $file_name = $file['image']['name'];
	    $file_size = $file['image']['size'];
	    $file_temp = $file['image']['tmp_name'];

	    $div = explode('.', $file_name);
	    $file_ext = strtolower(end($div));
	    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
	    $uploaded_image = "upload/".$unique_image;

	    if($productName == "" || $catId == "" || $brandId == "" || $body == ""
	     || $price == "" || $type == ""  ){
	    	$msg = "<span class='error'>Field must not be empty !</span>";
				return $msg;
	    }else{
	    	if (!empty( $file_name)) {

			if ($file_size >1048567) {
	    		 echo "<span class='error'>Image Size should be less then 1MB!
	     </span>";
	    } elseif (in_array($file_ext, $permited) === false) {
	     echo "<span class='error'>You can upload only:-"
	     .implode(', ', $permited)."</span>";
	    } else{
	    	 move_uploaded_file($file_temp, $uploaded_image);
			
			 $query = "update tbl_product
			 			set
			 			productName = '$productName',
			 			catId       = '$catId',
			 			brandId     = '$brandId',
			 			body        = '$body',
			 			price       = '$price',
			 			image       = '$uploaded_image',
			 			type        = '$type' 
			 			where productId = '$id'
			 			";
			$updated_row = $this->db->update($query);
				if($updated_row){
					$msg = "<span class='success'>Product Updated Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'>Product Not Updated !</span>";
					return $msg;
				}
	       }
	   }else{
	   		 
			
			 $query = "update tbl_product
			 			set
			 			productName = '$productName',
			 			catId       = '$catId',
			 			brandId     = '$brandId',
			 			body        = '$body',
			 			price       = '$price',
			 			
			 			type        = '$type' 
			 			where productId = '$id'
			 			";
			$updated_row = $this->db->update($query);
				if($updated_row){
					$msg = "<span class='success'>Product Updated Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'>Product Not Updated !</span>";
					return $msg;
				}

	   		}
		}

	}


	public function delProById($id){

		$query = "select * from tbl_product where productId = '$id'";
		$getData = $this->db->select($query);
		if ($getData) {
			while ($delimg = $getData->fetch_assoc()) {
				$dellink = $delimg['image'];
				unlink($dellink);
			}
				
		}

		$delquery = "delete from tbl_product where productId = '$id'"; 
		$deldata = $this->db->delete($delquery);
		if ($deldata) {
			$msg = "<span class='success'>Product Deleted Successfully.</span>";
					return $msg;
		}else{
			$msg = "<span class='error'>Product Not Deleted !</span>";
			return $msg;
		}
	}


	public function getFeaturedProduct(){
		$query = "select * from tbl_product where type='0' order by productId desc limit 4";
		$result = $this->db->select($query);
		return $result;

	}


	public function getNewProduct(){
		$query = "select * from tbl_product   order by productId desc limit 4";
		$result = $this->db->select($query);
		return $result;

	}
	public function getSingleProduct($id){
		$query = "select p.*, c.catName, b.brandName
					from tbl_product as p , tbl_category as c, tbl_brand as b
					where p.catId = c.catId and p.brandId = b.brandId 
					and p.productId='$id'
					";
		/*
		$query = "select  tbl_product.*, tbl_category.catName, tbl_brand.brandName
				 from tbl_product
				 inner join tbl_category
				 ON tbl_product.catId = tbl_category.catId
				 inner join tbl_brand
				 ON tbl_product.brandId = tbl_brand.brandId
				 and tbl_product.productId='$id'
					";
				*/
		$result = $this->db->select($query);
		return $result;


	}

	public function latestFromIphone(){
		$query = "select * from tbl_product where brandId='1'  order by productId desc limit 1";
		$result = $this->db->select($query);
		return $result;

	}
	public function latestFromSamsung(){
		$query = "select * from tbl_product where brandId='2'  order by productId desc limit 1";
		$result = $this->db->select($query);
		return $result;

	}
	public function latestFromAcer(){
		$query = "select * from tbl_product where brandId='3'  order by productId desc limit 1";
		$result = $this->db->select($query);
		return $result;

	}
	public function latestFromCanon(){
		$query = "select * from tbl_product where brandId='6'  order by productId desc limit 1";
		$result = $this->db->select($query);
		return $result;

	}

	public function productByCat($id){
		$id        = $this->fm->validation($id);
		$catId = mysqli_real_escape_string($this->db->link, $id);

		$query = "select * from tbl_product where catId='$catId'";
		$result = $this->db->select($query);
		return $result;

	}


}
?>