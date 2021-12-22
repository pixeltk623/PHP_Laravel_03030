<?php 
	
	$conn = mysqli_connect("localhost","root","","php_03030");
	if (!$conn) {	
		echo "Db error";
	}

	$query = "SELECT * FROM mvc";

    $res = mysqli_query($conn, $query);
    $response = array();
    while($response[] = mysqli_fetch_assoc($res)) {}

    $finalData = array_filter($response);
    
	
	echo json_encode($finalData);

    // echo "<pre>";

    // print_r($finalData);

?>