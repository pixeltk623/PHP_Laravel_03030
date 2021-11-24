<?php 
		
	include_once 'config.php';

	date_default_timezone_set("Asia/Kolkata");

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

	
		// echo "<pre>";

		// print_r($_POST);
		// die;	

		if($fullName!='' && count($hobby)>0) {

			$query = "UPDATE `employees` SET `name`='$fullName',`email`='$email',`gender`='$gender',`hobby`='".implode(",", $hobby)."',`city`='$city',`dob`='$dob',`updated_at`='".date("Y-m-d H:i:s")."' WHERE id=".$_GET['id'];

			$result = mysqli_query($conn, $query);

			if($result) {
				$success = "Employee Details Updated";
			} else {
				$error = "Something Error";
			}
		}


	}

	if (isset($_GET['id'])) {
		
		$eid = $_GET['id'];

		$query = "SELECT * FROM employees WHERE id = ".$eid;

    	$res = mysqli_query($conn, $query);

    	$data = mysqli_fetch_object($res);

    	$hobbyNew = explode(",", $data->hobby);

    	// echo "<pre>";
    	// print_r($data);
    	// print_r($hobbyNew);
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
	<h1 style="text-align: center; color: blue;">Edit Employee Details</h1>
	
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
				<td><input type="text" name="fname" placeholder="Enter Your First Name" value="<?php echo (isset($data->name)) ? $data->name : ''; ?>">
					<?php 
						if (isset($e1)) {
							echo "<span style='color:red;'>".$e1."</span>";
						}
					?>
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email" placeholder="Enter Your Last Email" value="<?php echo $data->email; ?>"></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td><input type="radio" name="gender" value="Male" <?php echo ($data->gender=='Male') ? 'checked' : '' ?>>Male
				<input type="radio" name="gender" value="Female" <?php echo ($data->gender=='Female') ? 'checked' : '' ?>>Female
				<input type="radio" name="gender" value="Others" <?php echo ($data->gender=='Others') ? 'checked' : '' ?>>Others
			</td>
			</tr>

			<tr>
				<th>DOB</th>
				<td><input type="date" name="dob" value="<?php echo $data->dob; ?>"></td>
			</tr>
			<tr>
				<th>City</th>
				<td>
					<select name="city" >
						<option value="" <?php echo ($data->city=='' ? 'selected' : '') ?>>Select</option>
						<option value="Vadodara" <?php echo ($data->city=='Vadodara' ? 'selected' : '') ?>>Vadodara</option>
						<option value="Anand" <?php echo ($data->city=='Anand' ? 'selected' : '') ?>>Anand</option>
						<option value="Nadiad" <?php echo ($data->city=='Nadiad' ? 'selected' : '') ?>>Nadiad</option>
						<option value="Ahmedabad" <?php echo ($data->city=='Ahmedabad' ? 'selected' : '') ?>>Ahmedabad</option>
						<option value="Surat" <?php echo ($data->city=='Surat' ? 'selected' : '') ?>>Surat</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Hobby</th>
				<td>
					<input type="checkbox" name="hobby[]" value="Cricket" <?php echo (in_array("Cricket", $hobbyNew)) ? 'checked' : ''; ?>>Cricket
					<input type="checkbox" name="hobby[]" value="Football" <?php echo (in_array("Football", $hobbyNew)) ? 'checked' : ''; ?>>Football
					<input type="checkbox" name="hobby[]" value="Baseball" <?php echo (in_array("Baseball", $hobbyNew)) ? 'checked' : ''; ?>>Baseball
					<input type="checkbox" name="hobby[]" value="Badmintion" <?php echo (in_array("Badmintion", $hobbyNew)) ? 'checked' : ''; ?>>Badmintion
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" name="submit" value="Update">
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