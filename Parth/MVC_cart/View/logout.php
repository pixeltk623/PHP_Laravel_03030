<?php

session_start();

	unset($_SESSION['is_login']);
	unset($_SESSION['customer']);

	header("Location: ../MVC_cart");
?>