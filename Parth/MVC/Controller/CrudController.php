<?php
	include_once "Model/CrudModel.php";
	class CrudController extends CrudModel {

		public function __construct() {
			parent::__construct();
			
			if(isset($_SERVER['PATH_INFO'])) {


				switch ($_SERVER['PATH_INFO']) {
					case '/create':
						if (isset($_POST['submit'])) {
							
							echo "<pre>";

							print_r($_POST);

							$data = array("name" => $_POST['name'], "email" => $_POST['email']);


							$result = $this->insert($data,'mvc');
							if ($result) {
								echo "Inserted";
							} else {
								echo "Error";
							}
						}
						include_once "View/create.php";
						break;
					
					case 'variable':
						# code...
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