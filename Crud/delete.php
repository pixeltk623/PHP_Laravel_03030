<?php 
	
	include_once 'config.php';
	if (isset($_GET['id'])) {
		
		$did = $_GET['id'];

		$queryGetInfo = "SELECT profile_pic FROM employees WHERE id = ".$did;

		$resInfo = mysqli_query($conn, $queryGetInfo);
		$profile_pic = mysqli_fetch_object($resInfo)->profile_pic;

		if (file_exists("uploads/".$profile_pic)) {
			unlink("uploads/".$profile_pic);
			$query = "DELETE  FROM employees WHERE id = ".$did;
	    	$res = mysqli_query($conn, $query);

	    	if ($res) {
	    			
	    		header("Location: index.php");

	    	}
		} else {
			header("Location: file_not_found.php?id=".$did);
			
		}
	}

?>