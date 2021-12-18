<?php
	session_start();

	include_once "Model/CrudModel.php";
	
    if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {}

	class CrudController extends CrudModel {

		public function __construct() {
			parent::__construct();
			
			if(isset($_SERVER['PATH_INFO'])) {


				switch ($_SERVER['PATH_INFO']) {
					case '/Admin/login':
						if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {
					        header("Location: http://localhost/PHP_Laravel_03030/Parth/MVC_login/View/dashboard");
					    }
					    include_once "View/Admin/login.php";
					    if (isset($_POST['login'])) {

						    if (!isset($ere) && !isset($erp)) {

				        		$data=$this->login($email,$pass);    
				        		print_r($data);
					            if(sizeof($data)>0) {

					                $_SESSION['is_login'] = true;
					                $_SESSION['admin_id'] = $data['id'];
					                $_SESSION['s_start'] = time();
					                
					                if ($pass==$data['password']) {
					                	echo "Hello";
					                    header("Location: http://localhost/PHP_Laravel_03030/Parth/MVC_login/View/dashboard");    
					                } else {
					                    $erp="Password does not match.";
					                }

					            } else {
					                $ere="Does not match.";
					            }
				        	}
						}
						break;

					case '/Admin/forgot_pass':

						break;

					case '/View/logout':
						include_once "View/logout.php";
						break;

					case '/View/dashboard':
						$result=$this->getCount();
						include_once "View/dashboard.php";
						break;

					case '/View/add_category':
						include_once "View/add_category.php";
						break;

					case '/View/manage_category':
						include_once "View/manage_category.php";
						break;

					case '/View/update_category':
						include_once "View/update_category.php";
						break;

					case '/View/add_pass':
						include_once "View/add_pass.php";
						break;

					case '/View/manage_pass':
						include_once "View/manage_pass.php";
						break;

					case '/View/update_pass':
						include_once "View/update_pass.php";
						break;

					case '/View/profile':
						include_once "View/profile.php";
						break;

					case '/View/pass_report':
						include_once "View/pass_report.php";
						break;

					case '/View/view_pass':
						include_once "View/view_pass.php";
						break;

					case '/View/admin_pass':
						include_once "View/admin_pass.php";
						break;

					case '/View/search':
						include_once "View/search.php";
						break;

					case '/View/report':
						include_once "View/report.php";
						break;

					case '/create':
						if (isset($_POST['submit'])) {

							$data = array("name" => $_POST['name'], "email" => $_POST['email']);


							$result = $this->insert($data,$table);
							if ($result) {
								$message="Inserted";
							} else {
								$message="Error";
							}
						}
						include_once "View/create.php";
						break;
					
					case '/update':
						$data=$this->action($_GET['id'],$table);
						date_default_timezone_set("Asia/Calcutta");
						if (isset($_POST['update'])) {

							$data = array("name" => $_POST['name'], "email" => $_POST['email']);

							$result = $this->update($_POST['id'],$data,$table);
							if ($result) {
								$message="Updated";
							} else {
								$message="Error";
							}
							$data=$this->action($_POST['id'],$table);
						}
						include_once "View/update.php";
						break;

					case '/delete':
						$result=$this->delete($_GET['id'],$table);
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

				include_once 'View/index.php';
			}

		}
	}

	$obj=new CrudController;
	
?>