<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		table tr td {
			padding: 10px;
		}
	</style>

</head>
<body>

	<marquee>Hello This is Kumar</marquee>

	<fieldset>
		<legend>Registration Form</legend>
	<form method="post" enctype="multipart/form-data">
		<label>Name</label>
		<input type="text" name="name" value="Sharvan" placeholder="Enter your name" autocomplete="off">
		<br><br>
		<label>Email</label>
		<input type="email" name="email" value="" placeholder="Enter your Email" required>
		<br><br>

		<label>Search</label>
		<input type="Search" name="">
		<br><br>	

		<label>Range</label>
		<input type="range" name="" min="10" max="100" value="15">
		<br><br>	

		<progress value="50" max="200"></progress>
		<br><br>

		<label>Gender</label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<br><br>

		<label>Hobby</label>
		<input type="checkbox" name="gender" value="Cricket">Cricket
		<input type="checkbox" name="gender" value="Football">Football
		<br><br>

		<label>Address</label>
		<textarea cols="50" rows="10"></textarea>
		<br><br>

		<label>Date</label>
		<input type="date" name="">
		<br><br>

		<label>Date & Time</label>
		<input type="datetime-local" name="">

		<br><br>
		<label>Time</label>
		<input type="time" name="">

		<br><br>

		<label>Month</label>
		<input type="month" name="">

		<br><br>

		<label>Week</label>
		<input type="week" name="">

		<br><br>
		<label>Qty</label>
		<input type="number" name="">
		<br><br>
		<br><br>
		<label>Color</label>
		<input type="color" name="">
		<br><br>

		<label>City</label>
		
		<select multiple size="2">
			<option value="">Select</option>
			<option value="">ABC</option>
			<option value="">ABC</option>
			<option value="">ABC</option>
			<option value="">ABC</option>
		</select>

		<br><br>

		<label>Photo</label>
		<input type="file" name="file" multiple>

		<br><br>
		<input type="submit" name="submit">

		<input type="reset" name="">
	</form>

	</fieldset>

	<br><br>

	<table border="1" style="border-collapse: collapse; width: 500px;">
		<tr>
			<th>Name</th>
			<td>
				<input type="text" name="">
			</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>
				<input type="text" name="">
			</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>
				<input type="text" name="">
			</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>
				<input type="text" name="">
			</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>
				<input type="text" name="">
			</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>
				<input type="text" name="">
			</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>
				<input type="text" name="">
			</td>
		</tr>
	</table>
</body>
</html>