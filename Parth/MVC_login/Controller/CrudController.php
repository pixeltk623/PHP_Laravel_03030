<?php
	include_once "Model/CrudModel.php";
	class CrudController extends CrudModel {

		public function __construct() {
			parent::__construct();
			
			if(isset($_SERVER['PATH_INFO'])) {


				switch ($_SERVER['PATH_INFO']) {
					case '/login':
						if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {
					        header("Location: user_home");
					    }
					    include_once "View/login.php";
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
					                	if ($data['is_admin']==0) {
					                		header("Location: user_home");
					                	} else {
					                		header("Location: dashboard");
					                	}
					                } else {
					                    $erp="Password does not match.";
					                }

					            } else {
					                $ere="Does not match.";
					            }
				        	}
						}
						break;

					case '/dashboard':
						$result=$this->getCount();
						include_once "View/dashboard.php";
						break;

					case '/user_home':
						if (isset($_POST['search'])) {
        
					        $gid=$_POST['id'];

					        if ($gid=="") {
					            $err="Can not be empty.";
					        }

					        if (!isset($err)) {
					        
					            $data=$this->search($gid);    
					        }

					    }
						include_once "View/user_home.php";
						break;

					case '/logout':
						include_once "View/logout.php";
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