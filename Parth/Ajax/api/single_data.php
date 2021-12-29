<?php 
    include_once 'config.php';


    if (isset($_GET['eid'])) {
    	$query = "SELECT * FROM employees WHERE id = ".$_GET['eid']; 

    	$result = mysqli_query($conn, $query);

    	if($result->num_rows>0) {
    		$response = mysqli_fetch_assoc($result);
    		echo json_encode(['status' => 202, 'message' => 'Record Found', 'data' => $response]);
    	} else {
    		echo json_encode(['status' => 404, 'message' => 'No Record Found', 'data' => null]);
    	}
    }

    
?>