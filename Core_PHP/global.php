<?php 
	
	// echo $_POST;

	//echo "<pre>";

	// print_r($_POST);

	// print_r($_POST);

	// echo $_POST['name'];

	//print_r($_GET);

	// echo $_GET['name'];

	// if (isset($_GET['name'])) {
	// 	echo $_GET['name'];
	// }

	// echo "<pre>";

	// print_r($_POST);

	// if (isset($_POST['name'])) {
	// 	echo $_POST['name'];
	// }

	if (isset($_POST['submit'])) {
		
		// $name = $_POST['name'];
		// $email = $_POST['email'];

		// if ($name=='') {
			
		// 	$err1 = "Name Can Not be blank";

		// }

		// if ($email=='') {
		// 	$err2 = "Email Can Not be blank";
		// }

		// if ($name!='' && $email != '') {
		// 	echo "All Ok";
		// }

		// if (isset($_POST['gender'])) {
		// 	$gender = $_POST['gender'];

		// } else {
		// 	$gender = "";

		// }

		
		// if ($gender=='') {
		// 	$err3 = "Gender Must be Selected";
		// }

		if (isset($_POST['hobby'])) {
			
			$hobby = $_POST['hobby'];
			// echo "<pre>";
			// print_r($hobby);
		} else {
			$hobby = array();
			// echo "<pre>";
			// print_r($hobby);
		}

		// if (sizeof($hobby)<1) {
		// 	$err4 = "Pz select atleast one Hobby";
		// }

		// $city = $_POST['city'];

		// if ($city=='') {
		// 	$err5 = "Pz select the city";
		// }

		$date = $_POST['date'];

		if ($date=='') {
			$err6 = "Date Can Not be blank";
		}
	}
?>


<form method="post">
<!-- 	<label>Name</label>
	<input type="text" name="name">
	<?php
		if (isset($err1)) {
			?>
			<span style="color: red;"><?php echo $err1; ?></span>
			<?php 
		}
	?>
	<br><br>
	<label>Email</label>
	<input type="text" name="email">
	<?php
		if (isset($err2)) {
			?>
			<span style="color: red;"><?php echo $err2; ?></span>
			<?php 
		}
	?> -->

	<!-- <label>Gender</label>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female

	<?php
		if (isset($err3)) {
			?>
			<span style="color: red;"><?php echo $err3; ?></span>
			<?php 
		}
	?> -->

	<!-- <label>Hobby</label>
	<input type="checkbox" name="hobby[]" value="Cricket">Cricket
	<input type="checkbox" name="hobby[]" value="Football">Football
	<input type="checkbox" name="hobby[]" value="Tenis">Tenis
	<input type="checkbox" name="hobby[]" value="Kabaddi">Kabaddi

	<?php
		if (isset($err4)) {
			?>
			<span style="color: red;"><?php echo $err4; ?></span>
			<?php 
		}
	?>
 -->

 	<!-- <label>City: </label>
 	<select name="city">
 		<option value="">Select</option>
 		<option value="Vadodara">Vadodara</option>
 		<option value="Anand">Anand</option>
 		<option value="Surat">Surat</option>
 		<option value="Bharuch">Bharuch</option>

 	</select> -->

 	<label>Date</label>

 	<input type="date" name="date">

<!--  	<?php
		if (isset($err5)) {
			?>
			<span style="color: red;"><?php echo $err5; ?></span>
			<?php 
		}
	?>
 -->
 <?php
	if (isset($err6)) {
			?>
			<span style="color: red;"><?php echo $err6; ?></span>
			<?php 
		}
	?>


	<br><br>
	<input type="submit" name="submit">


</form>