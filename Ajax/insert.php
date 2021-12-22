<?php 
	
	$conn = mysqli_connect("localhost","root","","php_03030");
	if (!$conn) {	
		echo "Db error";
	}

	if (isset($_POST)) {
		$query = "INSERT INTO mvc (name,email) VALUES ('".$_POST['name']."','".$_POST['email']."')";

    	$res = mysqli_query($conn, $query);

    	if ($res) {
    		echo true;
    	} else {
    		echo false;
    	}
	}

	
?>