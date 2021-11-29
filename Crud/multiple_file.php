<?php 
	include_once 'config.php';
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$productImage = $_FILES['productImage'];

		$sql = "INSERT INTO products (name) VALUES ('$name')";

		mysqli_query($conn, $sql);

		$last_id = mysqli_insert_id($conn);

		// echo "<pre>";

		// print_r($productImage);

		foreach ($productImage['name'] as $key => $value) {

			$ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));
			$filename=$last_id."_".++$key.".".$ext;
			$query = "INSERT INTO product_images (productImage, product_id) VALUES ('$filename', '$last_id')";
			$res=mysqli_query($conn, $query);

			if ($res && !file_exists("uploads/".$filename)) {
				
				move_uploaded_file($productImage['tmp_name'][--$key], "uploads/".$filename);
			}
		}


	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		<label>Name</label>
		<input type="text" name="name">
		<br><br>
		<label>Multiple File</label>
		<input type="file" name="productImage[]" multiple>
		<br><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>