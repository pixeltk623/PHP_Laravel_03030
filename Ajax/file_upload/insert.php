<?php 
	
	$conn = mysqli_connect("localhost","root","","php_03030");
	if (!$conn) {	
		echo "Db error";
	}

	if (isset($_POST)) {

		$fullName = $_POST['fname'];
		$email = $_POST['email'];
		if(isset($_POST['gender'])) {
			$gender = $_POST['gender'];
		} else {
			$gender = '';
		}

		if(isset($_POST['hobby'])) {
			$hobby = $_POST['hobby'];
		} else {
			$hobby = array();
		}
		$dob = $_POST['dob'];
		$city = $_POST['city'];
		$profilePic = $_FILES['profilePic'];

		move_uploaded_file($profilePic['tmp_name'], "uploads/".$profilePic['name']);

		$query = "INSERT INTO `employees`(`name`, `email`, `gender`, `hobby`, `city`, `dob`,`profile_pic`) VALUES ('$fullName', '$email','$gender','".implode(",", $hobby)."', '$city', '$dob','".$profilePic['name']."')";

		$res = mysqli_query($conn, $query);

		if ($res) {
    		echo true;
    	} else {
    		echo false;
    	}
	}

	
?>