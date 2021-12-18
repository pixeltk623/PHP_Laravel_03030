<?php

	class CrudModel {

		private $server="localhost";
		private $username="root";
		private $password="";
		private $database="tshirt_cart";
		public $conn;

		public function __construct() {
 			$this->conact();
		}

		public function conact() {

			$this->conn= mysqli_connect($this->server,$this->username,$this->password,$this->database);
			if (!$this->conn) {	
				echo "Db error";
				die();
			}

			return $this->conn;
		}

		public function getIndexData() {
			$this->query = "SELECT p.*,pdi.img from products p
                    INNER JOIN product_images pdi ON pdi.product_id = p.id
                    WHERE pdi.is_featured = 1";
            $this->res=mysqli_query($this->conn,$this->query);
			$this->response=array();
			while($this->response[] = mysqli_fetch_assoc($this->res)) {}
		    
		    $this->showData = array_filter($this->response);	
			
		    return $this->showData;
		}


		public function getsp($featured,$productID) {
			
			$this->query="SELECT p.*,pdi.img from products p
            INNER JOIN product_images pdi ON pdi.product_id = p.id WHERE pdi.is_featured =$featured AND p.id =$productID";
			$this->res=mysqli_query($this->conn,$this->query);
			$this->response = mysqli_fetch_assoc($this->res);
		    
		    $this->showData = array_filter($this->response);	
			
		    return $this->showData;
		}
		
		public function getData($id,$table) {
			
			$this->query="SELECT * FROM $table WHERE id=$id";
			$this->res=mysqli_query($this->conn,$this->query);
			$this->response[] = mysqli_fetch_assoc($this->res);
		    
		    $this->showData = array_filter($this->response);	
			
		    return $this->showData;
		}

		public function insert($data, $table) {

			$colName = implode(",",array_keys($data));

			$values = "'".implode("','", array_values($data))."'"; 

			$query="INSERT INTO $table ($colName) VALUES ($values)";

			$res=mysqli_query($this->conn,$query);

			return $res;
		}

		public function action($id,$table) {
			$this->query="SELECT * FROM $table WHERE id='$id'";
			$this->res=mysqli_query($this->conn,$this->query);
			$this->response = mysqli_fetch_assoc($this->res);
		    
		    $this->showData = array_filter($this->response);	
			
		    return $this->showData;
		}

		public function update($id,$data, $table) {

			$set="";
			foreach ($data as $key => $value) {
				$set=$set.$key."='".$value."',";
			}
			$set=substr($set, 0, -1);

			$query="UPDATE $table SET $set,updated_at='".date("Y-m-d H:i:s")."' WHERE id='$id'";
			$res=mysqli_query($this->conn,$query);

			return $res;
		}
		
		public function delete($id,$table) {

			$query="DELETE FROM $table WHERE id='$id'";
			return $res=mysqli_query($this->conn,$query);
		}

	}
?>