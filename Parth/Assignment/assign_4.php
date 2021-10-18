<?php

	//Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34

	if (isset($_POST['submit'])) {
		
		$num1=$_POST['num1'];
		$message="";

		$num=$num1-1;

		for($i=0;$i<=$num;$i++){

			$message=$message." ".$i;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title>Assignment 4</title>
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label class="form-label">Number </label>
				<input type="text" class="form-control" required name="num1">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="submit">
			</div>
		</form>

		<?php if (isset($message)) { ?>
		<div>
			<h1>Fibonacci series :  <?php echo $message; ?></h1>
		</div>	
		<?php
		}?>

	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>