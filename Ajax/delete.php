<?php 
	
	$conn = mysqli_connect("localhost","root","","php_03030");
	if (!$conn) {	
		echo "Db error";
	}

	if (isset($_POST)) {
		$query = "DELETE FROM mvc WHERE id = ".$_POST['id'];

    	$res = mysqli_query($conn, $query);

    	if ($res) {
    		echo true;
    	} else {
    		echo false;
    	}
	}

	
?>