<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (isset($metaDesc)?$metaDesc:'Demo PHP Shopping Cart')?>">
	<meta name="author" content="Ahsan Zameer">
  
    <title><?php echo (isset($pageTitle)?$pageTitle:'PHP Shopping Cart')?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
   <div class="container">
        <div class="row mt-2 mb-2">
            <div class="col-md-12 col-xs-12">
                <h1>
                    Cool T-Shirt Shop
                </h1>
            </div>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"">
                <li class="nav-item active">
                    <a class="nav-link" href="../MVC_cart">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="dropdown ml-5">
                <a class="btn dropdown-toggle text-light" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Customer
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="customer">Customer Profile</a></li>
                    <li><a class="dropdown-item" href="admin_pass">Setting</a></li>
                    <hr>
                    <li><a class="dropdown-item" href="logout">Logout</a></li>
                </ul>
            </div>
            <div class="form-inline my-2 my-lg-0">
                <a href="cart" style="color:#ffffff">
                    <i class="bi bi-cart4" style="font-size:30px;"></i>
                    <?php 
                        echo (isset($_SESSION['cart_items']) && count($_SESSION['cart_items'])) > 0 ? count($_SESSION['cart_items']):'';
                    ?>
                </a>
            </div>
            
        </nav>