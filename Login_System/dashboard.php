<?php 
	session_start();

	// echo "<pre>";

	// print_r($_SESSION);
	
	echo $_SESSION['time'];

	echo "<br>";

	echo time();
	echo "<br>";

	echo $diff =  time() - $_SESSION['time'];

	if($diff>10) {

		session_destroy();

		header("Location: index.php");

	} else {
		$_SESSION['time'] = time();
	}

	// die;


	// echo "<pre>";
	// print_r($_SESSION);

	$currenttime=time();
	$diff=$currenttime - $_SESSION['s_start'];

	if ($diff < 600) {
		$_SESSION['s_start']=time();
	} else {
		header("Location: logout.php");
	}

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
