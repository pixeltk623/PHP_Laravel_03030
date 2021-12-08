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

			$obj=new update($_GET['id'],$fullName,$email,$gender,$hobby,$city,$dob);
			$result=$obj->upd();

			if($result) {
				$success = "Profile Updated";
			} else {
				$error = "Something Error";
			}
		}

	}

	if($_GET['id']) {

			$id=$_GET['id'];
			$o=new action($id);
			$data=$o->start();
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
	<h1 style="text-align: center; color: blue;">Profile | Update</h1>
	
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
				<td><input type="text" name="fname" placeholder="Enter Your First Name" value="<?php echo $data['name']; ?>">
					<?php 
						if (isset($e1)) {
							echo "<span style='color:red;'>".$e1."</span>";
						}
					?>
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email" placeholder="Enter Your Last Email" value="<?php echo $data['email']; ?>"></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td><input type="radio" name="gender" value="Male" <?php if ($data['gender']== 'Male') echo 'checked="cheacked"'; ?>>Male
				<input type="radio" name="gender" value="Female" <?php if ($data['gender']== 'Female') echo 'checked="cheacked"'; ?>>Female
				<input type="radio" name="gender" value="Others" <?php if ($data['gender']== 'Others') echo 'checked="cheacked"'; ?>>Others
			</td>
			</tr>

			<tr>
				<th>DOB</th>
				<td><input type="date" name="dob" value="<?php echo $data['dob']; ?>"></td>
			</tr>
			<tr>
				<th>City</th>
				<td>
					<select name="city" >
						<option value="" <?php if ($data['city']== '') echo ' selected="selected"'; ?>>Select</option>
						<option value="Vadodara" <?php if ($data['city']== 'Vadodara') echo ' selected="selected"'; ?>>Vadodara</option>
						<option value="Anand" <?php if ($data['city']== 'Anand') echo ' selected="selected"'; ?>>Anand</option>
						<option value="Nadiad" <?php if ($data['city']== 'Nadiad') echo ' selected="selected"'; ?>>Nadiad</option>
						<option value="Ahmedabad" <?php if ($data['city']== 'Ahmedabad') echo ' selected="selected"'; ?>>Ahmedabad</option>
						<option value="Surat" <?php if ($data['city']== 'Surat') echo ' selected="selected"'; ?>>Surat</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Hobby</th>
				<td>
					<input type="checkbox" name="hobby[]" value="Cricket" <?php if (str_contains($data['hobby'], 'Cricket')) echo 'checked="cheacked"'; ?>>Cricket
					<input type="checkbox" name="hobby[]" value="Football" <?php if (str_contains($data['hobby'], 'Football')) echo 'checked="cheacked"'; ?>>Football
					<input type="checkbox" name="hobby[]" value="Baseball" <?php if (str_contains($data['hobby'], 'Baseball')) echo 'checked="cheacked"'; ?>>Baseball
					<input type="checkbox" name="hobby[]" value="Badmintion" <?php if (str_contains($data['hobby'], 'Badmintion')) echo 'checked="cheacked"'; ?>>Badmintion
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