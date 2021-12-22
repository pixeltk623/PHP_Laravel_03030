<?php 
	
	$conn = mysqli_connect("localhost","root","","php_03030");
	if (!$conn) {	
		echo "Db error";
	}

	date_default_timezone_set("Asia/Calcutta");

	if (isset($_POST)) {

		$query = "UPDATE `mvc` SET `name`='".$_POST['name']."',`email`='".$_POST['email']."',`updated_at`='".date("Y-m-d H:i:s")."' WHERE id = ".$_POST['id'];


    	$res = mysqli_query($conn, $query);

    	if ($res) {
    		echo true;
    	} else {
    		echo false;
    	}
	}

	
?>