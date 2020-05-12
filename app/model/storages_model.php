<?php
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/storage_model.php");

class Storages extends Model {
	private $storages;
	private $db;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->storages = array();
		$this->db = $this->connect();
		$result = $this->readStorages();
		while ($row = $result->fetch_assoc()) {
			array_push($this->storages, new Storage($row["ID"], $row["product_id"] ,$row["productname"], $row["currentq"], $row["inq"], $row["outq"] ));
		}
	}

	function getStorages() {
		return $this->storages;

	}

	function readStorages(){
		$sql = "SELECT * FROM storage";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertStorage ($SID, $product_name, $product_id, $currentq, $inq, $outq){
		$sql = "INSERT INTO storage (ID, product_id, productname, currentq, inq, outq) VALUES ('$SID', '$product_name', '$product_id', '$currentq', '$inq', '$outq')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	
  
	function editProduct($SID, $product_name, $product_id, $currentq, $inq, $outq)
	{
		$conn = $this->dbh->getConn();
	  $SID = $conn->real_escape_string($SID);
	  $product_name = $conn->real_escape_string($product_name);
	  $product_id = $conn->real_escape_string($product_id);
	  $currentq = $conn->real_escape_string($currentq);
	  $inq = $conn->real_escape_string($inq);
	  $outq = $conn->real_escape_string($outq);
	 
	 $sql = "UPDATE storage SET productname = '$product_name', product_id = '$product_id', currentq = '$currentq', inq = '$inq', outq = '$outq' WHERE ID = $SID"; 
  
	  ///CHECK echos
	  if($this->dbh->query($sql) === true)
	  {
		echo "Records updated successfully.";
	  }
	  else
	  {  
		echo "ERROR: Could not execute $sql. " . $conn->error;
	  }
	  }
  
  
	function deleteProduct($SID)
	{
	  $sql="DELETE FROM storage WHERE ID = $SID";
		 
	  ///CHECK echos
	  if($this->dbh->query($sql) === true)
	  {
		echo "Record deleted successfully.";
	  } 
	  else
	  {
	  echo "ERROR: Could not execute $sql. " . $conn->error;
  
	
	  }
	}
}