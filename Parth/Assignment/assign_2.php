<?php

	
	//Write a PHP program to check Leap years between 1901 to 2016 using nested if.

	if(isset($_POST['submit'])){

		$start_year=$_POST['Start'];
		$end_year=$_POST['End'];

		$year="";		
		for($i=$start_year;$i<=$end_year;$i++)
		{
			if ($i%4==0) {
				$year=$year.$i.", ";
			}
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title>Assignment 2</title>
</head>
<body>
	<div>
		<form method="post">
			<div class="form-group"> 
			    <label class="form-label">Starting Year :</label>
			
			    <input type="text" class="form-control" name="Start" required>
			</div>
			<div class="form-group"> 
			    <label class="form-label">Ending Year :</label>
			
			    <input type="text" class="form-control" name="End" required>
			</div>
			<div>
				<button class="btn btn-primary" type="submit" name="submit">
				    Submit
				</button>
			</div>
		</form>
		<br><br>
		<?php
			if (isset($year)) {
		?>

		<div>
			<h1><?php echo $year; ?></h1>
		</div>
		<?php
			}
		?>
	</div>
</body>
</html>