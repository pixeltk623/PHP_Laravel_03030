<?php 
		
	include_once 'crud.php';

	if (isset($_POST['submit'])) {
		
		$fullName = $_POST['fname'];
		
		if($fullName=='') {
			$e1 =  "Name Can Not be blank";
		}

		$email = $_POST['email'];
		if($fullName=='') {
			$e2 =  "Email Can Not be blank";
		}

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

	

		if($fullName!='' && count($hobby)>0) {

			$obj=new insert($fullName,$email,$gender,$hobby,$city,$dob);
			$result=$obj->start();

			if($result) {
				$success = "New Profile Created";
			} else {
				$error = "Something Error";
			}
		}


	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>OOPS</title>
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
	<h1 style="text-align: center; color: blue;">Profile | Insert</h1>
	
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
			
	<form method="post">
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