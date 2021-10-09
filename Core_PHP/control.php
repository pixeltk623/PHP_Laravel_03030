<?php 
	
	// if (condition) {
	// 	# code...
	// }

	// if (condition) {
	// 	# code...
	// } else {
	// 	# code...
	// }

	// if (condition) {
	// 	# code...
	// } elseif() {
	// 	# code...
	// } elseif (condition) {
	// 	# code...
	// } else {

	// }
	
	// $retVal = (condition) ? a : b ;
	

	// switch (variable) {
	// 	case 'value':
	// 		# code...
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }

	// $name = "";

	// if (isset($name)) {
	// 	echo "variable Hai";
	// } else {
	// 	echo "Nahi hai";
	// }
	//echo $_POST['submit'];
	if (isset($_POST['submit'])) {
		$number = $_POST['number'];

		if ($number>0) {
			$message =  $number." Number is +ve";

			//$message = "<h1>".$number." is +ve Number</h1>";
		} else {
			$message =  $number." Number is -ve";

			//$message = "<h1>".$number." is -ve Number</h1>";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Enter Your Number</label>
		<input type="text" name="number">
		<input type="submit" name="submit" value="Check">
	</form>

	<?php

		// if (isset($message)) {
		//  	echo  $message;
		//  } 

		// if (isset($message)) {
		// 	echo "<h1>".$message."</h1>";
		// }

		if (isset($message)) {
			?>
			<h1><?php echo $message; ?></h1>	
			<?php
		}

	?>
</body>
</html>