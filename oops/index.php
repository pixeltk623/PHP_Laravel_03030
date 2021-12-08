<?php 
	
	// class Person{

	// 	public $name = "Kumar";
	// 	private $salary;
	// 	protected $userName = "root";

	// 	public function printName() {

	// 		echo "Hello ".$this->name;
	// 	}

	// 	private function printPassword() {
	// 		return $this->userName;
	// 	}

	// 	public function accessPass() {
	// 		return $this->printPassword();
	// 	}
	// }

	// $obj = new Person();

	// //echo $obj->name = "Rahul";
	// // echo $obj->userName;
	// echo "<pre>";

	// print_r($obj);

	// $obj->printName();

	// echo "<br>";

	// echo $obj->accessPass();


	// class Person {

	// 	public $name;
	// 	public $email;

	// 	public function __construct($name, $email) {
			
	// 		$this->name = $name;
	// 		$this->email = $email;
	// 	}

	// 	function getName() {
	// 		echo $this->name;
	// 	}

	// 	public function __destruct() {
	// 		unset($this->name);
	// 		unset($this->email);
	// 	}
	// }

	// $name = "Sharvan";
	// $email = "s@gmail.com";


	// $ob = new Person($name, $email);

	// $ob->getName();

	
	// class Employee{ 

	// 	const WEB_URL = "www.google.com";

	// 	public function getWebUrl() {
	// 		echo self::WEB_URL;
	// 	}
	// }

	// $ob = new Employee();

	// $ob->getWebUrl();
	//echo Employee::WEB_URL;
	
	class Company {
		protected $salary = 5656;

		public function __construct() {
			echo "Parent Construct";
		}

		public function getCompanyName() {
			echo "Softnice Vadodara";
		}
	}

	class Employee extends Company {
		
		public function __construct() {
			parent::__construct();
			echo "Child Construct";
		}
		// Child Class

		public function getSalary() {
			return $this->salary;
		}

	}

	$ob = new Employee();

	$ob->getCompanyName();
	echo $ob->getSalary();
	echo "<pre>";

	print_r($ob);

	// Crud Operation 

	// OOps


?>