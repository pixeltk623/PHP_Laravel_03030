<?php 
		
	include_once 'config.php';

	if (isset($_POST['submit'])) {
		
		$fullName = $_POST['fname'];
		
		if($fullName=='') {
			$e1 =  "Name Can Not be blank";
		}

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

		$ext = strtolower(pathinfo($profilePic['name'], PATHINFO_EXTENSION));
		$size =  $profilePic['size'];

		if($ext=='jpg' || $ext=='png' || $ext=='jpeg') {

		} else {
			$erp= "File extension must be. jpg and png";
		}
<<<<<<< HEAD
		echo $size=number_format($size/1024, 2);

		if ($size>=102400 && $size<=204800) {
=======
		$size = number_format($size/1024, 2);
	
		if ($size<=200) {
>>>>>>> 92c7a5d7b502bcd4df16aaa548beff2789adb22d
			
		} else {
			$erps= "Size must be 100 kb to 200 kb.";
		}

		if (file_exists("uploads/".$profilePic['name'])) {
			$erpe= "File already exists.";
		}

		// echo "<pre>";

		// print_r($profilePic);

<<<<<<< HEAD
		// die;
=======
		// die;		
	
>>>>>>> 92c7a5d7b502bcd4df16aaa548beff2789adb22d

		if($fullName!='' && count($hobby)>0 && !isset($erp) && !isset($erps)  && !isset($erpe)) {
			move_uploaded_file($profilePic['tmp_name'], "uploads/".$profilePic['name']);

			move_uploaded_file($profilePic['tmp_name'], "uploads/".$profilePic['name']);

			$query = "INSERT INTO `employees`(`name`, `email`, `gender`, `hobby`, `city`, `dob`,`profile_pic`) VALUES ('$fullName', '$email','$gender','".implode(",", $hobby)."', '$city', '$dob','".$profilePic['name']."')";

			$result = mysqli_query($conn, $query);

			if($result) {
				$success = "New Employee Created";
			} else {
				$error = "Something Error";
			}
		}


	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud | New Employee Registration</title>
	<style type="text/css">
		table {
			margin: auto;
		}

		table tr th,td {
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: blue;">New Employee Registration</h1>
	
		<?php
			if (isset($success)) {
				?>
				<h3 style="text-align: center; color: green;"><?php echo $success; ?></h3>
				<?php
				
			}
		?>
	
		<?php
			if (isset($error)) {
				?>
				<h3 style="text-align: center; color: red;"><?php echo $error; ?></h3>
				<?php
				
			}
		?>
			
	<form method="post" enctype="multipart/form-data">
		<table width="50%" style="border-collapse: collapse;" border="1">
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="fname" placeholder="Enter Your First Name" >
					<?php 
						if (isset($e1)) {
							echo "<span style='color:red;'>".$e1."</span>";
						}
					?>
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email" placeholder="Enter Your Last Email" ></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td><input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Others">Others
			</td>
			</tr>

			<tr>
				<th>DOB</th>
				<td><input type="date" name="dob" ></td>
			</tr>
			<tr>
				<th>City</th>
				<td>
					<select name="city" >
						<option value="">Select</option>
						<option value="Vadodara">Vadodara</option>
						<option value="Anand">Anand</option>
						<option value="Nadiad">Nadiad</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Surat">Surat</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Hobby</th>
				<td>
					<input type="checkbox" name="hobby[]" value="Cricket">Cricket
					<input type="checkbox" name="hobby[]" value="Football">Football
					<input type="checkbox" name="hobby[]" value="Baseball">Baseball
					<input type="checkbox" name="hobby[]" value="Badmintion">Badmintion
				</td>
			</tr>
			<tr>
				<th>Profile Pic</th>
				<td>
					<input type="file" name="profilePic">
					<?php 
						if (isset($erp)) {
							echo "<span style='color:red;'>".$erp."</span>";
						}
						if (isset($erps)) {
							echo "<span style='color:red;'>".$erps."</span>";
						}
						if (isset($erpe)) {
							echo "<span style='color:red;'>".$erpe."</span>";
						}
					?>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" name="submit" value="Register">
				</th>
			</tr>
			<tr>
				<th colspan="2">
					<button style="background-color: green; border: none; padding: 10px;"><a href="index.php" style="color: white; text-decoration: none;">Back To Home</a></button>
				</th>
			</tr>
		</table>
	</form>
</body>
</html>