<?php

	/*Write a PHP program to enter marks of five subjects Physics, Chemistry, Biology, Mathematics and Computer, calculate percentage and grade by if else Write a PHP program for find ‘tdursday’ in week using switch function.*/

	if(isset($_POST['submit'])){
		
		$Physics=$_POST['Physics'];
		$Chemistry=$_POST['Chemistry'];
		$Biology=$_POST['Biology'];
		$Mathematics=$_POST['Mathematics'];
		$Computer=$_POST['Computer'];

		$total=$Physics+$Chemistry+$Biology+$Mathematics+$Computer;

		$Percentage=($total/500)*100;

		if($Percentage>90)
		{
			$grade="A+";
		}
		elseif ($Percentage<=90 && $Percentage>80) {
			$grade="A";
		}
		elseif ($Percentage<=80 && $Percentage>70) {
			$grade="B+";
		}
		elseif ($Percentage<=80 && $Percentage>60) {
			$grade="B";
		}
		elseif ($Percentage<=60 && $Percentage>50) {
			$grade="C+";
		}
		elseif ($Percentage<=50 && $Percentage>40) {
			$grade="C";
		}
		elseif ($Percentage<=40 && $Percentage>35) {
			$grade="D";
		}
		else{
			$grade="F";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title>Assignment 1</title>
</head>
<body>
	<div>
		<form method="post">
			<div class="row g-3 align-items-center">
			  <div class="col-sm-2">
			    <label class="form-label">Physics :</label>
			  </div>
			  <div class="col-sm-2">
			    <input type="text" class="form-control" name="Physics" required>
			  </div>
			</div>
			<div class="row g-3 align-items-center">
			  <div class="col-sm-2">
			    <label class="form-label">Chemistry :</label>
			  </div>
			  <div class="col-sm-2">
			    <input type="text" class="form-control" name="Chemistry" required>
			  </div>
			</div>
			<div class="row g-3 align-items-center">
			  <div class="col-sm-2">
			    <label class="form-label">Biology :</label>
			  </div>
			  <div class="col-sm-2">
			    <input type="text" class="form-control" name="Biology" required>
			  </div>
			</div>
			<div class="row g-3 align-items-center">
			  <div class="col-sm-2">
			    <label class="form-label">Mathematics :</label>
			  </div>
			  <div class="col-sm-2">
			    <input type="text" class="form-control" name="Mathematics" required>
			  </div>
			</div>
			<div class="row g-3 align-items-center">
			  <div class="col-sm-2">
			    <label class="form-label">Computer :</label>
			  </div>
			  <div class="col-sm-2">
			    <input type="text" class="form-control" name="Computer" required>
			  </div>
			</div>
			<div>
				<button class="btn btn-primary" type="submit" name="submit" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				    Submit
				</button>
			</div>
		</form>

	</div>
	<br><br>

	<div class="collapse" id="collapseExample">
		<div class="card card-body">
		<table class="table caption-top table-bordered border-primary">
			<tr>
				<th>Subject</th>
				<th>Score</th>
			</tr>
			<tr>
				<td>Physics</td>
				<td><?php if(isset($Physics)){
					echo $Physics;
				} ?></td>
			</tr>
			<tr>
				<td>Chemistry</td>
				<td><?php if(isset($Chemistry)){
					echo $Chemistry;
				} ?></td>
			</tr>
			<tr>
				<td>Biology</td>
				<td><?php if(isset($Biology)){
					echo $Biology;
				} ?></td>
			</tr>
			<tr>
				<td>Matdemetics</td>
				<td><?php if(isset($Mathematics)){
					echo $Mathematics;
				} ?></td>
			</tr>
			<tr>
				<td>Computer</td>
				<td><?php if(isset($Computer)){
					echo $Computer;
				} ?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td><?php if(isset($total)){
					echo $total;
				} ?></td>
			</tr>
			<tr>
				<td>Percentage</td>
				<td><?php if(isset($Percentage)){
					echo $Percentage;
				} ?></td>
			</tr>
			<tr>
				<td>Grade</td>
				<td><?php if(isset($grade)){
					echo $grade;
				} ?></td>
			</tr>
		</table>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>