<?php

	class CrudModel {

		private $server="localhost";
		private $username="root";
		private $password="";
		private $database="mvc";
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

		public function show($id="") {

			if ($id!="") {
				$query="SELECT * FROM `profile` WHERE id='$id'";
				$res=mysqli_query($conn,$query);
				
				$showData = mysqli_fetch_assoc($res);
			    
			    $showData = array_filter($response);
			} else {
				$query="SELECT * FROM `profile`";
				$res=mysqli_query($conn,$query);
				$response=array();
				while($response[] = mysqli_fetch_assoc($res)) {}
			    
			    $showData = array_filter($response);	
			}
			
		    return $showData;
		}

		public function insert($name,$email,$mobile) {

			$query="INSERT INTO `profile`(`name`, `email`, `mobile`) VALUES ('$name','$email','$mobile')";
			$res=mysqli_query($conn,$query);
		}

		public function update($id,$name,$email,$mobile) {

			$query="UPDATE `profile` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id='$id'";
			$res=mysqli_query($conn,$query);
		}
		
		public function delete($id) {

			$query="DELETE FROM `profile` WHERE id='$id'";
			$res=mysqli_query($conn,$query);
		}

	}
?>