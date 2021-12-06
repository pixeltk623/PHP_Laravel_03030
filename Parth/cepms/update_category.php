<?php
    include_once 'config.php';

    

    if (isset($_POST['update'])) {

        
        $name=$_POST['cn'];
        if ($name=="") {
            $ern="Category Name can not be empty.";
        }

        if (!isset($ern)) {
        
            $query = "UPDATE category SET `name`='$name',`updated_at`='".date("Y-m-d H:i:s")."' WHERE id=".$_GET['id'];
            $res = mysqli_query($conn, $query);


            if ($res) {
                    $message="Successfull";
                }    
        }
            
    }

    if (isset($_GET['id'])) {
        $gid=$_GET['id'];

        $query = "SELECT `name` FROM category WHERE id=".$gid;

        $res = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($res);
        $data = implode("", $data);
    }

    
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
        <h1>Update Category</h1>
        <hr>
        <form method="post">
            <label class="form-label">Category Name</label>
            <input type="text" class="form-control" name="cn" value="<?php echo $data; ?>">
            <?php 
                if (isset($ern)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <br>
            <input type="submit" class="btn btn-primary" name="update" value="Update">
        </form>
        <?php 
            if (isset($message)) {
                echo "<span style='color:green;'>".$message."</span>";
            }
        ?>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>
