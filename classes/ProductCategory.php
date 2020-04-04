<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../library/database.php');
	include_once ($filepath.'/../helper/Format.php');	
?>

<?php
/**
* Category class
*/
class ProductCategory
{
		private $db;
		private $fm;
		public function __construct(){
			$this->db = new Database();
			$this->fm = new Format();
}

	

	public function proCatInsert($proCatName){
		$proCatName = $this->fm->validation($proCatName);
		$proCatName = mysqli_real_escape_string($this->db->link, $proCatName);
		if (empty($proCatName)){
				$msg = "<span class='error'>Category Field must not be empty !</span>";
				return $msg;
			}else{

				$query = "insert into  tbl_procategory(proCatName) values('$proCatName') ";
				$catinsert = $this->db->insert($query);
				if($catinsert){
					$msg = "<span class='success'>Product Category Inserted Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'>Category Not Inserted !</span>";
					return $msg;
				}
			}
	}

	public function getAllCat(){
		$query = "select * from tbl_procategory order by proCatId asc";
		$result = $this->db->select($query);
		return $result;
	}

	public function getCatById($id){
		$query = "select * from tbl_procategory  where proCatId='$id'";
		$result = $this->db->select($query);
		return $result;

	}

	public function catUpdate($catName, $id){
		$catName = $this->fm->validation($catName);
		$catName = mysqli_real_escape_string($this->db->link, $catName);
		$id      = mysqli_real_escape_string($this->db->link, $id);
		if (empty($catName) ){
				$msg = "<span class='error'>Category Field must not be empty !</span>";
				return $msg;
			}else{
				$query = "update tbl_procategory
						 SET 
						 proCatName = '$catName'
						 where proCatId = '$id'";
				$updated_row = $this->db->update($query);
				if ($updated_row) {
					$msg = "<span class='success'>Product Category Updated Successfully.</span>";
					return $msg;
				}else{
					$msg = "<span class='error'>Category Not Updated !</span>";
					return $msg;
				}
			}
	}

	public function delCatById($id){
		$id = mysqli_real_escape_string($this->db->link, $id);
		$query = "delete from tbl_procategory where proCatId = '$id'";
		$deldata = $this->db->delete($query);
		if ($deldata) {
			$msg = "<span class='success'>Product Category Deleted Successfully.</span>";
					return $msg;
		}else{
			$msg = "<span class='error'>Category Not Deleted !</span>";
			return $msg;
		}
	}
}
?>