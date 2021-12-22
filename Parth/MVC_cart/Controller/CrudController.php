<?php
	session_start();
	include_once "Model/CrudModel.php";
	define('PRODUCT_IMG_URL','img/product-images/');

	class CrudController extends CrudModel {

		public function __construct() {
			parent::__construct();
			
			if(isset($_SERVER['PATH_INFO'])) {


				switch ($_SERVER['PATH_INFO']) {
					case '/login':
						if(isset($_SESSION['is_login']) && isset($_SESSION['customer'])) {
					        header("Location: ../MVC_cart");
					    }
					    if (isset($_POST['login'])) {
        
					        $email=$_POST['email'];
					        $pass=$_POST['pass'];

					        if ($email=="") {
					            $ere="Email can not be empty.";
					        }
					        if ($pass=="") {
					            $erp="Password can not be empty.";
					        }
					        
					        if (!isset($ere) && !isset($erp)) {

				        		$data=$this->login($email,$pass);    
				        		print_r($data);
					            if(sizeof($data)>0) {

					                $_SESSION['is_login'] = true;
					                $_SESSION['customer'] = $data['id'];
					                $_SESSION['s_start'] = time();
					                
					                if ($pass==$data['password']) {
					                	header("Location: ../MVC_cart");
					                } else {
					                    $erp="Password does not match.";
					                }

					            } else {
					                $ere="Does not match.";
					            }
				        	}
					    }
					    include_once "View/login.php";
						break;

					case '/register':
						
						if (isset($_POST['add'])) {
							$name=$_POST['name'];
					        $email=$_POST['email'];
					        $pass=$_POST['pass'];
					        $conpass=$_POST['conpass'];
					        $mobile=$_POST['mobile'];
					        $address=$_POST['address'];
					        $city=$_POST['city'];
					        $state=$_POST['state'];
					        $pin=$_POST['pin'];

					        if ($name=='') {
					            $ern="Name can not be empty";
					        }
					        if ($email=='') {
					            $ere="Email can not be empty";
					        }
					        if ($pass=='') {
					            $erp="Password can not be empty";
					        }
					        if ($conpass=='') {
					            $ercp="Confirm Password can not be empty";
					        }
					        if ($conpass!=$pass) {
					            $ercp="Password does not match";
					        }
					        if ($mobile=='') {
					            $erm="Mobile can not be empty";
					        }
					        if ($address=='') {
					            $era="Address can not be empty";
					        }
					        if ($city=='') {
					            $erc="City can not be empty";
					        }
					        if ($state=='') {
					            $ers="State can not be empty";
					        }
					        if ($pin=='') {
					            $erpin="pin can not be empty";
					        }

							if (!isset($ern) && !isset($ere) && !isset($erp) && !isset($ercp) && !isset($erm) && !isset($era) && !isset($erc) && !isset($ers) && !isset($erpin)) {
					    		
					    		$data=array(
					    			"name"=>$name,
					    			"email"=>$email,
					    			"password"=>$pass,
					    			"mobile"=>$mobile,
					    			"address"=>$address,
					    			"city"=>$city,
					    			"state"=>$state,
					    			"pincode"=>$pin
					    		);

					    		$res=$this->insert($data,'customer');
					    		if ($res) {
					    			header("Location: login");
					    		} else {
					    			$message="Error while registration";
					    		}
					        }
						}
						
						include_once "View/register.php";
						break;

					case '/customer':
						if(isset($_SESSION['is_login']) && isset($_SESSION['customer'])) {

							$cid=$_SESSION['customer'];

							if (isset($_POST['update'])) {
								$name=$_POST['name'];
						        $email=$_POST['email'];
						        $mobile=$_POST['mobile'];
						        $address=$_POST['address'];
						        $city=$_POST['city'];
						        $state=$_POST['state'];
						        $pin=$_POST['pin'];

						        if ($name=='') {
						            $ern="Name can not be empty";
						        }
						        if ($email=='') {
						            $ere="Email can not be empty";
						        }
						        if ($mobile=='') {
						            $erm="Mobile can not be empty";
						        }
						        if ($address=='') {
						            $era="Address can not be empty";
						        }
						        if ($city=='') {
						            $erc="City can not be empty";
						        }
						        if ($state=='') {
						            $ers="State can not be empty";
						        }
						        if ($pin=='') {
						            $erpin="pin can not be empty";
						        }

								if (!isset($ern) && !isset($ere)&& !isset($erm) && !isset($era) && !isset($erc) && !isset($ers) && !isset($erpin)) {
						    		
						    		$data=array(
						    			"name"=>$name,
						    			"email"=>$email,
						    			"mobile"=>$mobile,
						    			"address"=>$address,
						    			"city"=>$city,
						    			"state"=>$state,
						    			"pincode"=>$pin
						    		);

						    		$res=$this->update($data,'customer');
						    		if ($res) {
						    			$message="Successfull Update";
						    		} else {
						    			$message="Error while update";
						    		}
						        }
							}
							$res=$this->action($cid,"customer");
					        include_once "View/customer.php";
					    } else {
					    	header("Location: login");
					    }
						break;

					case '/logout':
						include_once "View/logout.php";
						break;

					case '/cart':
						if(isset($_GET['action'],$_GET['item']) && $_GET['action'] == 'remove')
					    {
					        unset($_SESSION['cart_items'][$_GET['item']]);
					    }
						include_once 'View/cart.php';
						break;

					case '/update':
						if(isset($_POST['update']))
						{
						    $sessionItem = $_POST['itemID'];
						    $sessionItemQty = $_POST['qty'];
						    $productSessionPrice = $_SESSION['cart_items'][$sessionItem]['total_price'];

						    $_SESSION['cart_items'][$sessionItem]['qty'] = $sessionItemQty;
						    $_SESSION['cart_items'][$sessionItem]['total_price'] = $sessionItemQty * $productSessionPrice;
						}
						include_once 'View/cart.php';
						break;

					case '/empty':
						if(isset($_GET))
						{
						    unset($_SESSION['cart_items']);
						}
						include_once 'View/cart.php';
						break;

					case '/cheakout':
						if(isset($_SESSION['is_login']) && isset($_SESSION['customer'])) {

							$cartItemCount = count($_SESSION['cart_items']);

							if(!isset($_SESSION['cart_items']) || empty($_SESSION['cart_items']))
						    {
						        header('location: ../MVC_cart');
						        exit();
						    }
							$cid=$_SESSION['customer'];

							if (isset($_POST['submit'])) {
								
								$totalPrice=0;
				                foreach($_SESSION['cart_items'] as $item)
		                        {
		                            $totalPrice+=$item['total_price'];
		                        }
		                        $data = [
				                    'customer_id' => $cid,
				                    'total_price' => $totalPrice,
				                    'order_status' => 'confirmed',
				                    'created_at'=> date('Y-m-d H:i:s'),
				                    'updated_at'=> date('Y-m-d H:i:s')
				                ];
				                $ins=$this->insert($data,"orders");
				                $id = mysqli_insert_id($this->conn);

				                foreach($_SESSION['cart_items'] as $item)
		                        {
		                            $od = [
		                                'order_id' =>  $id,
		                                'product_id' =>  $item['product_id'],
		                                'product_name' =>  $item['product_name'],
		                                'product_price' =>  $item['product_price'],
		                                'qty' =>  $item['qty'],
		                                'total_price' =>  $item['total_price']
		                            ];

		                            $insod=$this->insert($od,"order_details");
		                        }

		                        if (isset($ins) && isset($insod)) {
		                        	unset($_SESSION['cart_items']);
                        			$_SESSION['confirm_order'] = true;
		                        	header("Location: thank-you");
		                        } else {
		                        	$message="Error";
		                        }
							}

							$res=$this->action($cid,"customer");
							include_once 'View/cheakout.php';
						} else {
							header("Location: login");
						}
						break;

					case '/thank-you':
						include_once 'View/thank-you.php';
						break;

					case '/single-product':
						include_once 'sp.php';
						include_once 'View/single-product.php';
						break;

					default:
						# code...
						break;
				}
			} else {
				$getAllProducts = $this->getIndexData();
				include_once 'View/index.php';
			}

		}
	}

	$obj=new CrudController;
	
?>