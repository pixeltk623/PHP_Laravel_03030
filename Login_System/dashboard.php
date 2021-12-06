<?php 
	session_start();
	// echo "<pre>";
	// print_r($_SESSION);

	if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {
?>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Dashboard Page</h1>

	<a href="logout.php">Logout</a>
</body>
</html>
<?php

	} else {
		header("Location: index.php");
	}
?>
