<?php
	include_once 'crud.php';

	if (isset($_GET['id'])) {
		
		$obj=new delete($_GET['id']);
		$obj->start();

		header("Location: action.php");
	}
?>