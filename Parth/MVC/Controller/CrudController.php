<?php
	include_once "Model/CrudModel.php";
	class CrudController extends CrudModel {

		public function __construct() {
			parent::__construct();
			
			if(isset($_SERVER['PATH_INFO'])) {


				switch ($_SERVER['PATH_INFO']) {
					case '/create':
						if (isset($_POST['submit'])) {

							$data = array("name" => $_POST['name'], "email" => $_POST['email']);


							$result = $this->insert($data,'mvc');
							if ($result) {
								$message="Inserted";
							} else {
								$message="Error";
							}
						}
						include_once "View/create.php";
						break;
					
					case '/update':
						$data=$this->action($_GET['id'],'mvc');
						if (isset($_POST['update'])) {

							$data = array("name" => $_POST['name'], "email" => $_POST['email']);

							$result = $this->update($_POST['id'],$data,'mvc');
							if ($result) {
								$message="Updated";
							} else {
								$message="Error";
							}
							$data=$this->action($_POST['id'],'mvc');
						}
						include_once "View/update.php";
						break;

					case '/delete':
						$result=$this->delete($_GET['id'],'mvc');
						if ($result) {
							$message="Deleted";
							header("Location: index.php");
						} else {
							$message="Error";
						}
						break;

					default:
						# code...
						break;
				}
			} else {

				$result = $this->getAllData("mvc");
				include_once 'View/index.php';
			}

		}
	}

	$obj=new CrudController;
	
?>