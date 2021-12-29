<?php 
    include_once 'config.php';

    $query = "SELECT * FROM employees"; 

    $result = mysqli_query($conn, $query);


    if($result->num_rows>0) {

        $finalData = [];
        while ($response = mysqli_fetch_assoc($result)) {
            $response['file_name'] = "uploads/".$response['file_name'];
            array_push($finalData,$response);
        }

        echo json_encode(['status' => 202, 'message' => 'Record Found', 'data' => $finalData]);
    } else {
        echo json_encode(['status' => 404, 'message' => 'No Record Found', 'data' => null]);
    }
?>