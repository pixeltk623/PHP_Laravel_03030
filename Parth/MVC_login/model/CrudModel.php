<?php

	class CrudModel {

		private $server="localhost";
		private $username="root";
		private $password="";
		private $database="cepms";
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

		public function login($email,$pass) {

			$query = "SELECT * FROM `admin` WHERE (user_name = '$email' AND password = '$pass') OR (email = '$email' AND password = '$pass')";

            $res = mysqli_query($this->conn, $query);
            $data = mysqli_fetch_assoc($res);

            return $data;
		}

		public function search($id) {
			$query = "SELECT p.*, c.name AS cname FROM pass AS p LEFT JOIN category AS c ON c.id = p.category WHERE p.pass_number='".$id."'";

            $res = mysqli_query($this->conn, $query);
            $data = mysqli_fetch_assoc($res);

            return $data;
		}
		public function getCount() {

			$q1 = "SELECT COUNT(name) AS category FROM `category`";
		    $res1 = mysqli_query($this->conn, $q1);
		    $category = mysqli_fetch_assoc($res1);

		    $q2 = "SELECT COUNT(*) AS pass FROM `pass`";
		    $res2 = mysqli_query($this->conn, $q2);
		    $totalpass = mysqli_fetch_assoc($res2);

		    $q3 = "SELECT COUNT(*) AS pass FROM `pass` WHERE created_at >= CURDATE()";
		    $res3 = mysqli_query($this->conn, $q3);
		    $passtoday = mysqli_fetch_assoc($res3);
		    
		    $q4 = "SELECT COUNT(*) AS pass FROM `pass` WHERE created_at >= DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND created_at < CURDATE()";
		    $res4 = mysqli_query($this->conn, $q4);
		    $passyes = mysqli_fetch_assoc($res4);

		    $q5 = "SELECT COUNT(*) AS pass FROM `pass` WHERE created_at >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND created_at < CURDATE()";
		    $res5 = mysqli_query($this->conn, $q5);
		    $passweek = mysqli_fetch_assoc($res5);

		    $result=array("category"=> $category['category'],
		    	"totalpass"=>$totalpass['pass'],
		    	"passtoday"=>$passtoday['pass'],
		    	"passyes"=>$passyes['pass'],
		    	"passweek"=>$passweek['pass']
		    );

		    return $result;
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