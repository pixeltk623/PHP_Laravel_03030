<!DOCTYPE html>
<html lang="en">
<head>
    <title>CePMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body  style="background-color:lightgray;">

	<?php include_once 'header.php'; ?>	
    
    <main>
    	<div class="container">
    		<br>
            <h1>Dashboard</h1>
            <hr>
            <div>
                <div class="row g-5 p-2">
                    <div class="col-4">
                        <div class="p-3 border bg-light">
                            <div class="alert alert-danger">
                                <?php if (isset($result)) {
                                    echo $result['category'];
                                } ?>
                                Total Category
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 border bg-light">
                            <div class="p-2 alert alert-warning">
                                <?php if (isset($result)) {
                                    echo $result['totalpass'];
                                } ?>
                                Total Pass
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 border bg-light">
                            <div class="p-2 alert alert-danger">
                                <?php if (isset($result)) {
                                    echo $result['passtoday'];
                                } ?>
                                Pass Created Today
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 p-2">
                    <div class="col-4">
                        <div class="p-3 border bg-light">
                            <div class="p-2 alert alert-warning">
                                <?php if (isset($result)) {
                                    echo $result['passyes'];
                                } ?>
                                Pass Created Yesterday
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 border bg-light">
                            <div class="p-2 alert alert-primary">
                                <?php if (isset($result)) {
                                    echo $result['passweek'];
                                } ?>
                                Pass Created In This Week
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </main>   
  
</body>
</html>
