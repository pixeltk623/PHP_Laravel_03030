<?php 
	include_once 'config.php';

	$erf="";

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
			
			if($ext=='jpg' || $ext=='png' || $ext=='jpeg') {

			} else {
				$erp= "File extension must be. jpg and png";
			}

			$size = number_format($productImage['size'][--$key]/1024, 2);
		
			if ($size<=200) {				

			} else {
				$erps= "Size must be less than 200 kb.";
			}
			if (file_exists("uploads/".$filename)) {
				$erpe= "File already exists.";
			}

			if (!isset($erp) && !isset($erps) && !isset($erpe)) {

				$query = "INSERT INTO product_images (productImage, product_id) VALUES ('$filename', '$last_id')";
				$res=mysqli_query($conn, $query);

				if ($res) {
					move_uploaded_file($productImage['tmp_name'][$key], "uploads/".$filename);
				}
			} else {

				$erf=$erf.$value."<br>";

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
			if ($erf!="") {
				echo "<br><span style='color:red;'>Problem Files : ".$erf."</span>";
			}
		?>
		<br><br>
		<input type="submit" name="submit">
		<a href="multifile_show.php">Show</a>
	</form>

</body>
</html>