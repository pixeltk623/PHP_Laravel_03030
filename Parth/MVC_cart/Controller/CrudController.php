<?php
	session_start();
	include_once "Model/CrudModel.php";
	define('PRODUCT_IMG_URL','img/product-images/');

	class CrudController extends CrudModel {

		public function __construct() {
			parent::__construct();
			
			if(isset($_SERVER['PATH_INFO'])) {


				switch ($_SERVER['PATH_INFO']) {
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