<?php

	//Write a PHP program to find the largest of three numbers using ternary operator.

	if (isset($_POST['submit'])) {
		
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$num3=$_POST['num3'];

		$max = ($num1 > $num2) ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title>Assignment 3</title>
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label class="form-label">Number 1</label>
				<input type="text" class="form-control" required name="num1">
			</div>
			<div class="form-group">
				<label class="form-label">Number 2</label>
				<input type="text" class="form-control" required name="num2">
			</div>
			<div class="form-group">
				<label class="form-label">Number 3</label>
				<input type="text" class="form-control" required name="num3">
			</div>
			<div>
				<input type="submit" class="btn btn-primary" name="submit">
			</div>
		</form>

		<?php if (isset($max)) { ?>
		<div>
			<h1>The greatest number is <?php echo $max; ?></h1>
		</div>	
		<?php
		}?>

	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>