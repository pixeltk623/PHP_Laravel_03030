<?php
	include_once 'config.php';
	

	class show {

		public function start() {

			$conn = mysqli_connect("localhost","root","","php_03030");

			$query = "SELECT * FROM profile";

		    $res = mysqli_query($conn, $query);
		    $response = array();
		    while($response[] = mysqli_fetch_assoc($res)) {}
		    
		    $showData = array_filter($response);
		    return $showData;	
		}
	}

	class action {

		public $id;

		public function __construct($id) {
			$this->id=$id;
		}

		public function start() {

			$conn = mysqli_connect("localhost","root","","php_03030");

			$query = "SELECT * FROM profile where id=".$this->id;

		    $res = mysqli_query($conn, $query);
		    $response = mysqli_fetch_assoc($res);
		    
		    $showData = array_filter($response);
		    return $showData;	
		}
	}

	class insert {

		public $name;
		public $email;
		public $gender;
		public $hobby;
		public $city;
		public $dob;

		public function __construct($name,$email,$gender,$hobby,$city,$dob) {
			$this->name=$name;
			$this->email=$email;
			$this->gender=$gender;
			$this->hobby=$hobby;
			$this->city=$city;
			$this->dob=$dob;
		}

		public function start() {

			$conn = mysqli_connect("localhost","root","","php_03030");

			$query = "INSERT INTO `profile`(`name`, `email`, `gender`, `hobby`, `city`, `dob`) VALUES ('$this->name', '$this->email','$this->gender','".implode(",", $this->hobby)."', '$this->city', '$this->dob')";

				$result = mysqli_query($conn, $query);

				return $result;
			}

	}

	class update extends insert {

		public $name;
		public $email;
		public $gender;
		public $hobby;
		public $city;
		public $dob;
		public $id;

		public function __construct($id,$name,$email,$gender,$hobby,$city,$dob) {
			$this->name=$name;
			$this->email=$email;
			$this->gender=$gender;
			$this->hobby=$hobby;
			$this->city=$city;
			$this->dob=$dob;
			$this->id=$id;
		}
		
		public function upd() {

		$conn = mysqli_connect("localhost","root","","php_03030");

		$query = "UPDATE `profile` SET `name`='$this->name',`email`='$this->email',`gender`='$this->gender',`hobby`='".implode(",", $this->hobby)."',`city`='$this->city',`dob`='$this->dob',`updated at`='".date("Y-m-d H:i:s")."' WHERE id=".$this->id;

			$result = mysqli_query($conn, $query);

			return $result;
		}
	}

	class delete {

		public $id;

		public function __construct($id) {
			
			$this->id=$id;
		}

		public function start() {

			$conn = mysqli_connect("localhost","root","","php_03030");

			$query = "DELETE  FROM profile WHERE id = ".$this->id;
	    	$res = mysqli_query($conn, $query);
		}
			
	}
	
?>