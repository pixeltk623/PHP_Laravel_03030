<?php 
	session_start();
	$conn = mysqli_connect("localhost","root","","cepms");

	if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) { 
		header("Location: dashboard.php");
	}

	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$query = "SELECT * FROM `admin` WHERE (user_name = '$username' AND password = '$password') OR (email = '$username' AND password = '$password')";

		$res = mysqli_query($conn, $query);

		if($res->num_rows==1) {
			$_SESSION['is_login'] = true;
			$_SESSION['admin_id'] = mysqli_fetch_object($res)->id;
			header("Location: dashboard.php");
		} else {
			echo "Wrong Username or password";
		}



	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		<label>UserName/Email: </label>
		<input type="text" name="username">
		<br><br>
		<label>Password: </label>
		<input type="password" name="password">
		<br><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>