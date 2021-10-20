<?php
/*Write a program for this Pattern:
*****
*   *
*   *
*   *
*****
*/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title>Assignment 12</title>
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label class="form-label">Number </label>
				<input type="text" class="form-control" required name="num">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="submit">
			</div>
		</form>

		<?php 
			if (isset($_POST['submit'])) {
				
				$n=$_POST['num'];
				
				for($i=1; $i<=$n; $i++) {
					
					for($j=1; $j<=$n; $j++)
					{
						if($i==1||$i==$n||$j==1||$j==$n){
							echo "*&nbsp;";
						}else{
							echo "&nbsp;";
						}
					}
					echo "<br>";
				}
			}
		?>

	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>
