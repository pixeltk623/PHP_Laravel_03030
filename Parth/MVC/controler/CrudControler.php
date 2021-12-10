<?php
	include_once "model/CrudModel.php";
	class CrudControler extends CrudModel {

		public function __construct() {
			parent::__construct();
			echo "Hello";
		}
	}

	$obj=new CrudControler;
	echo "<pre>";
	print_r($obj);
?>