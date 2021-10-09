<?php

	if(isset($_POST['submit'])){
		$number=$_POST['name'];
	if($number%2==0){
		$message="<h1 style='color:green;'>Even</h1>";
	}else{
		$message="<h1 style='color:red;'>Odd</h1>";
	}
	}

	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post">
		<label>Name:</label>
		<input type="text" name="name">
		<input type="submit" name="submit">
	</form>

	<div>
		<?php 
			if (isset($message)) {
					echo $message;
					}		 ?>
	</div>
</body>
</html>