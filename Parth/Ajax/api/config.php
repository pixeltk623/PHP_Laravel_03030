<?php 
		
	// error_reporting(0);

	include_once 'constant.php';

	$conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DBNAME);

	if (!$conn) {
		echo mysqli_connect_error();
	}
?>