<?php 
	
	echo "<h1>This is PHP</h1>";

	$number = 5;

	if ($number%2==0) {
		echo "Even No";
	} else {
		echo "Odd No";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1 {
			color: red;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<h1>This is HTML</h1>
	<h2 id="user"></h2>
	<button class="btn btn-primary m-5">Test</button>
	<button type="button" onclick="getMyName()">Get Name</button>
	<script type="text/javascript">
		function getMyName(){
			//alert("Sharvan");
			document.getElementById('user').innerHTML = "Sharvan";
		}
	</script>
</body>
</html>