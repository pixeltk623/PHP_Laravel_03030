<?php 
	
	include_once "config.php";

	if (isset($_POST['submit'])) {
		
		$cityName = $_POST['WORKING_AREA'];

		$cityName = "'".implode("','", $cityName)."'";
	
		$queryFind = "SELECT * FROM agents WHERE WORKING_AREA IN ($cityName)";
		$resF = mysqli_query($conn, $queryFind);
		$responseF = array();
		while($responseF[] = mysqli_fetch_assoc($resF)) {}

		$finalDataF = array_filter($responseF);

		// echo "<pre>";

		// print_r($finalDataF);
	}

	$query = "SELECT * FROM agents";

	$res = mysqli_query($conn, $query);

	// echo "<pre>";

	// print_r($res);

	// while ($response = mysqli_fetch_assoc($res)) {
	// 	# code...
	// }
	$response = array();
	while($response[] = mysqli_fetch_assoc($res)) {}

	$finalData = array_filter($response);
	
	// echo "<pre>";
	// print_r($finalData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p> 	<form class="form-inline" method="post">
	  <label for="email" class="mr-2">WORKING AREA: </label>

	  <select required class="form-control w-25" name="WORKING_AREA[]" multiple size="2" style="resize: both;
  overflow: auto;">
  		<option value="">Select</option>
	  	 <?php 

	  		$query = "SELECT DISTINCT WORKING_AREA FROM `agents` ORDER BY WORKING_AREA ASC";
	  		$res = mysqli_query($conn, $query);

	  		while($response = mysqli_fetch_assoc($res)) {

	  			?>
	  			<option value="<?php echo $response['WORKING_AREA']; ?>"><?php echo $response['WORKING_AREA']; ?></option>
	  			<?php
	  		}
	  	
	  	?>
	  	
	  </select>
	  <button type="submit" name="submit" class="btn btn-primary ml-2">Search</button>
	</form>   
	<br>      
  <table class="table table-bordered">
    <thead>
      <tr>
      	<th>Sr.No</th>
        <th>AGENT CODE</th>
        <th>AGENT NAME</th>
        <th>WORKING AREA</th>
        <th>COMMISSION</th>
        <th>PHONE NO</th>
        <th>COUNTRY</th>
      </tr>
    </thead>
    <tbody>
    <?php

    	if(isset($finalDataF)) {
    		foreach ($finalDataF as $key => $value) {
    	?>
    	<tr>
        <td><?php echo ++$key; ?></td>
        <td><?php echo $value['AGENT_CODE']; ?></td>
        <td><?php echo $value['AGENT_NAME']; ?></td>
        <td><?php echo $value['WORKING_AREA']; ?></td>
        <td><?php echo $value['COMMISSION']; ?></td>
        <td><?php echo $value['PHONE_NO']; ?></td>
        <td>
        	<?php 
        		if ($value['COUNTRY']=='') {
        			echo "IN";
        		} else {
        			echo $value['COUNTRY'];
        		}
        	?>
        </td>
      </tr>
    	<?php
    }
    	} else {

    	foreach ($finalData as $key => $value) {
    ?>
    
      <tr>
        <td><?php echo ++$key; ?></td>
        <td><?php echo $value['AGENT_CODE']; ?></td>
        <td><?php echo $value['AGENT_NAME']; ?></td>
        <td><?php echo $value['WORKING_AREA']; ?></td>
        <td><?php echo $value['COMMISSION']; ?></td>
        <td><?php echo $value['PHONE_NO']; ?></td>
        <td>
        	<?php 
        		if ($value['COUNTRY']=='') {
        			echo "IN";
        		} else {
        			echo $value['COUNTRY'];
        		}
        	?>
        </td>
      </tr>
      <?php
    	}
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
