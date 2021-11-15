<?php 
	
	include_once "config.php";

	$queryT = "SHOW tables";
	$resT= mysqli_query($conn, $queryT);
	$responseT=array();
	while($responseT[] = mysqli_fetch_assoc($resT)) {} 
	$finalDataT= array_filter($responseT);

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>>Database Example</title>
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
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="table_data.php">Table Data</a></li>
          <li><a href="specific_data.php">Specific Table Data</a></li>
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
    		<p>This is site for database example where we used a dummy database and named it as "php_03030" where we doing some operations related database.</p>
    		<p>The relationship in database between tables is below :</p>
    		<img src="https://www.w3resource.com/w3r_images/sample.png">
    		<h2>The tables with in the database are stated below :</h2>
    		<ul>
    			<?php
					    	foreach ($finalDataT as $key => $value) {
					    	?>
					    	<li><?php echo $value['Tables_in_php_03030']; ?></li>
				<?php } ?>
    		</ul>
    	</div>
    </main>   
  
</body>
</html>
