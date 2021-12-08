<?php 
	
    if (isset($_POST['show'])) {
        header("Location: show.php");
    }
    if (isset($_POST['insert'])) {
        header("Location: insert.php");
    }
    if (isset($_POST['update'])) {
        header("Location: action.php");
    }
    if (isset($_POST['delete'])) {
        header("Location: action.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>OOPS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <br>
        <h1>Crud Using OOPS</h1>
        <br>
        <p>We are using oops concept for crud operatin. Here we are using profile table from a dummy database php03030. Please select the operation below.</p>
        <hr>
        <form method="post">
            <div class="row g-5">
                <div class="col-sm-3"><input type="submit" class="btn btn-primary" name="show" value="Show"></div>
                <div class="col-sm-3"><input type="submit" class="btn btn-success" name="insert" value="Insert"></div>
                <div class="col-sm-3"><input type="submit" class="btn btn-warning" name="update" value="Update"></div>
                <div class="col-sm-3"><input type="submit" class="btn btn-danger" name="delete" value="Delete"></div>
            </div>            
        </form>
        <hr>
    </div>
    
    <div class="container">
        
    </div>
    	   
  
</body>
</html>
