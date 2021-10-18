<?php 
	
	// Types of Array 

	
	// 1. Indexed Array 
	// 2. Associative Array 
	// 3.  Multidimensonal Array 
	
	//$newArray = array(5,8,5,8,5,8);

	// $arrayName = array("sharvan", 565, true, "5465", 89.5);

	// echo "<pre>";

	// print_r($arrayName);

	// die;

	//echo $newArray;

	// echo "<pre>";

	// print_r($newArray);

	// echo $newArray[0];


	// foreach ($newArray as $key => $value) {
		
	// 	echo $value;

	// 	echo "<br>";

	// }

	// echo sizeof($newArray);

	// die;

	// for ($i=0; $i < sizeof($newArray); $i++) { 
			
	// 	echo $newArray[$i];

	// 	echo "<br>";
	// }
	

	// $arrayNameAssoc = array
	// 	(
	// 		"name" => "sharvan",
	// 		"email" => "s@gmail.com",
	// 		"mobile" => 9835401515,
	// 		"address" => "Vadodara"
	// 	);

	// echo "<pre>";

	// print_r($arrayNameAssoc);


	// echo $arrayNameAssoc['name'];


	// echo sizeof($arrayNameAssoc);

		
	// $multiArray = array(
	// 	array(
	// 		array(5)
	// 	), 
	// 	array(8)
	// );


	// echo "<pre>";

	// print_r($multiArray);

	// echo $multiArray[0][0][0];
	// echo $multiArray[1][0];
	
	// implode(glue, pieces)

	// explode(delimiter, string)
		
	// $newString = "My Name is Sharvan";	

	// $newArray = explode(" ", $newString);

	// echo "<pre>";

	// print_r($newArray);

	// $newR = array("Sharvan", "Kumar");

	// echo implode("  ", $newR);
	// die;

	
	$multiArrayAssoc = array(
		array("name" => "sharvan",
			"email" => "s@gmail.com",
			"mobile" => 9835401515,
			"address" => "Vadodara", 
			"address2" => array("city" => "Gotri", "pin" => 801301)
		),
		array("name" => "sharvan",
			"email" => "s@gmail.com",
			"mobile" => 9835401515,
			"address" => "Vadodara",
			"address2" => array("city" => "Gotri", "pin" => 801301)
		),
		array("name" => "sharvan",
			"email" => "s@gmail.com",
			"mobile" => 9835401515,
			"address" => "Vadodara",
			"address2" => array("city" => "Gotri", "pin" => 801301)
		),
		array("name" => "sharvan",
			"email" => "s@gmail.com",
			"mobile" => 9835401515,
			"address" => "Vadodara",
			"address2" => array("city" => "Gotri", "pin" => 801301)
		),
		array("name" => "sharvan",
			"email" => "s@gmail.com",
			"mobile" => 9835401515,
			"address" => "Vadodara",
			"address2" => array("city" => "Gotri", "pin" => 801301)
		),
		array("name" => "sharvan",
			"email" => "s@gmail.com",
			"mobile" => 9835401515,
			"address" => "Vadodara",
			"address2" => array("city" => "Gotri", "pin" => 801301)
		),
	);

	// echo "<pre>";

	// // echo sizeof($multiArrayAssoc);
	// print_r($multiArrayAssoc);

	// for ($i=0; $i < sizeof($multiArrayAssoc); $i++) { 
		

	// 	echo $multiArrayAssoc[$i]['name'];
	// 	echo $multiArrayAssoc[$i]['email'];
	// 	echo $multiArrayAssoc[$i]['mobile'];
	// 	echo $multiArrayAssoc[$i]['address'];
	// 	echo "<br>";

	// }


	// foreach ($multiArrayAssoc as $key => $value) {
		
	// 	echo $value['name'];
	// }

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
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
      	<th rowspan="2">Sr.No</th>
        <th rowspan="2">Name</th>
        <th rowspan="2">Email</th>
        <th rowspan="2">Mobile</th>
        <th rowspan="2">Address</th>
        <th colspan="2" class="text-center">Address 2</th>
      </tr>
      <tr>
      	<th>City</th>
      	<th>Pin</th>
      </tr>
    </thead>
    <tbody>
     	<?php 
     		foreach ($multiArrayAssoc as $key => $value) {
     			?>
     			<tr>
     				<td><?php echo ++$key; ?></td>
     				<td><?php echo $value['name']; ?></td>
     				<td><?php echo $value['email']; ?></td>
     				<td><?php echo $value['mobile']; ?></td>
     				<td><?php echo $value['address']; ?></td>
     				<td><?php echo $value['address2']['city']; ?></td>
     				<td><?php echo $value['address2']['pin']; ?></td>
     			</tr>
     			<?php
     		}
     	?>
    </tbody>
  </table>
</div>

</body>
</html>
