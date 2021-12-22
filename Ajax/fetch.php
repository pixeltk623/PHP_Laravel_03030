<?php 
	
	$conn = mysqli_connect("localhost","root","","php_03030");
	if (!$conn) {	
		echo "Db error";
	}

	if (isset($_POST)) {
		$query = "SELECT * FROM mvc WHERE id = ".$_POST['id'];

    	$res = mysqli_query($conn, $query);

    	echo json_encode(mysqli_fetch_object($res));
	}

	
?>