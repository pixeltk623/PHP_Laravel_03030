<?php
    session_start();
    include_once 'config.php';

    if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>CePMS</title>
</head>
<body>

    <?php include_once 'header.php'; ?>
    
    <div class="container">
        <br>
        <h1>Between Dates Reports</h1>
        <hr>
        <form method="post" action="pass_report.php">
            <label class="form-label">From Date</label>
            <input type="date" class="form-control" name="fd">
            <?php 
                if (isset($erfd)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <label class="form-label">To Date</label>
            <input type="date" class="form-control" name="td">
            <?php 
                if (isset($ertd)) {
                echo "<span style='color:red;'>".$ertd."</span>";
                }
            ?>
            <br>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>
<?php 
    } else {
        header("Location: index.php");
    }
?>