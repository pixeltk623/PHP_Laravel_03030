<?php 
	
	include_once "config.php";

	$queryT = "SHOW tables";
	$resT= mysqli_query($conn, $queryT);
	$responseT=array();
	while($responseT[] = mysqli_fetch_assoc($resT)) {} 
	$finalDataT= array_filter($responseT);

	if (isset($_POST['submit'])) {

		$table=$_POST['tablename'];

		$queryC = "SHOW COLUMNS FROM $table";

		$resC = mysqli_query($conn, $queryC);
		$responseC = array();
		while($responseC[] = mysqli_fetch_assoc($resC)) {}
		$finalDataC = array_filter($responseC);

		$query = "SELECT * FROM $table";

		$res = mysqli_query($conn, $query);
		$response = array();
		while($response[] = mysqli_fetch_assoc($res)) {}
		$finalData = array_filter($response);

		if (isset($_POST['show'])) {
			echo "<pre>";
    		print_r($_POST);
			foreach ($finalDataC as $key => $valuec) {

				$condition="where ";
				if (isset($_POST[$valuec['Field']])) {
					
					$condition=$condition.$valuec['Field']." = ".$_POST[$valuec['Field']];
				}
			}

			if (isset($condition)) {
				$query = "SELECT * FROM $table".$condition;

				$resF = mysqli_query($conn, $query);
				$responseF = array();
				while($responseF[] = mysqli_fetch_assoc($resF)) {}
				$finalDataF = array_filter($responseF);
			}

		}

	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<header id="header" style="height: 50px;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">DB Task</a></h1>
   
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="table_data.php">Table Data</a></li>
          <li><a class="active" href="specific_data.php">Specific Table Data</a></li>
          <li><a href="insert_data.php">Insert Data</a></li>
          <li><a href="update_data.php">Update Date</a></li>
          <li><a href="delete_data.php">Delete data</a></li>
          <li><a href="multi_table.php">Mutli Table</a></li>

          
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
</header>
    
    <main>
    	<div class="container">
    		<br>
    		<form method="post">
    			<div class="form-group row ">
    				<h3>Select Table :</h3>
	    			<div class="col-sm-4">
	    				<select class="form-control" id="inputtable" name="tablename" required>
	    					<option value="">Select Table</option>
	    					<?php
					    	foreach ($finalDataT as $key => $value) {
					    	?>
					    	<option value="<?php echo $value['Tables_in_php_03030']; ?>"><?php echo $value['Tables_in_php_03030']; ?></option>

					    	<?php } ?>
	    				</select>
	    			</div>
	    			<input type="submit" class="btn btn-primary" name="submit">
    			</div>
    		</form>
    		<br>
    		<form method="post">

    			<?php 
    				if (isset($_POST['submit'])) {
    					foreach ($finalDataC as $key => $valuec) {
    			?>
    			<div class="form-group row ">
    				
    				<label class="form-label"><?php echo $valuec['Field']; ?></label>
	    			<div class="col-sm-4">
	    				<select class="form-control" id="inputtable" name=<?php echo $valuec['Field']; ?>>
	    				<option>Select</option>
	    				<?php
					    	foreach ($finalData as $key => $value) {
					    ?>	
					    <option value="<?php echo $value[$valuec['Field']]; ?>"><?php echo $value[$valuec['Field']]; ?></option>
					    <?php } ?>
	    				</select>
	    			</div>
	    		</div>
	    		<?php } ?>
	    			<input type="submit" class="btn btn-primary" name="show" value="Show">
	    		<?php } ?>
    		</form>
    		<br>
    	</div>
    	<?php if (isset($finalData)) { ?>
    	<hr>
    	<div class="container">
    	<table class="table table-bordered">
	    <thead>
	      <tr>
	      	<th>Sr. No.</th>
	      	<?php
	    	foreach ($finalDataC as $key => $value) {
	    	?>
	      	<th><?php echo $value['Field']; ?></th>
	    	<?php } ?>
	      </tr>
	    </thead>
	    <tbody>
	    <?php
	    	if (isset($finalDataF)) {
	   
	    	foreach ($finalDataF as $key => $value) {
	    ?>
	    
	      <tr>
	        <td><?php echo ++$key; ?></td>
	        <?php
	    	foreach ($finalDataC as $key => $value2) {
	    	?>
	        <td><?php echo $value[$value2['Field']]; ?></td>
	        <?php } ?>
	      </tr>
	      <?php
	    	}
	    ?>
	    <?php
	    	}else {
	    	foreach ($finalData as $key => $value) {
	    ?>
	    
	      <tr>
	        <td><?php echo ++$key; ?></td>
	        <?php
	    	foreach ($finalDataC as $key => $value2) {
	    	?>
	        <td><?php echo $value[$value2['Field']]; ?></td>
	        <?php } ?>
	      </tr>
	      <?php
	    	}}
	    ?>
	    </tbody>
	  </table>
	</div>
	<?php } ?>
    </main>   
  


</body>
</html>