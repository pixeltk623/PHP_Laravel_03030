<?php

	class CrudModel {

		private $server="localhost";
		private $username="root";
		private $password="";
		private $database="php_03030";
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

		public function getAllData($table) {
				$this->query="SELECT * FROM $table";
				$this->res=mysqli_query($this->conn,$this->query);
				$this->response=array();
				while($this->response[] = mysqli_fetch_assoc($this->res)) {}
			    
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

		public function update($id,$name,$email,$mobile) {

			$query="UPDATE `profile` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id='$id'";
			$res=mysqli_query($conn,$query);
		}
		
		public function delete($table, $id) {

			$query="DELETE FROM $table WHERE id='$id'";
			return $res=mysqli_query($this->conn,$query);
		}

	}
?>