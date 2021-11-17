<?php 
	include_once 'config.php';
	if (isset($_GET['id'])) {
		
		$did = $_GET['id'];

		$query = "DELETE  FROM employees WHERE id = ".$did;

    	$res = mysqli_query($conn, $query);

    	if ($res) {
    			
    		header("Location: index.php");

    	}
	}

?>