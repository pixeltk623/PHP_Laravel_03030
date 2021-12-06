<?php
    include_once 'config.php';

    

    if (isset($_POST['update'])) {

        
        $name=$_POST['cn'];
        $mobile=$_POST['cn'];
        $email=$_POST['email'];

        if ($name=="") {
            $ern="Category Name can not be empty.";
        }
        if ($mobile=="") {
            $ercn="Contact Number can not be empty.";
        }
        if ($email=="") {
            $ere="Email Address can not be empty.";
        }

        if (!isset($ern) && !isset($ercn) && !isset($ere)) {
        
            $query = "UPDATE category SET `name`='$name',`updated_at`='".date("Y-m-d H:i:s")."' WHERE id=".$_GET['id'];
            $res = mysqli_query($conn, $query);


            if ($res) {
                    $message="Successfull";
                }    
        }
            
    }

    if (isset($_GET['id'])) {
        $gid=$_GET['id'];

        $query = "SELECT * FROM admin WHERE id=".$gid;

        $res = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($res);
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
        <h1>Admin Profile</h1>
        <hr>
        <form method="post">
            <label class="form-label">Admin Name</label>
            <input type="text" class="form-control" name="cn" value="<?php echo $data['admin_name']; ?>">
            <?php 
                if (isset($ern)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <label class="form-label">User Name</label>
            <input type="text" class="form-control" value="<?php echo $data['user_name']; ?>" readonly>

            <label class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="cn" value="<?php echo $data['mobile']; ?>">
            <?php 
                if (isset($ercn)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <label class="form-label">Email Address</label>
            <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
            <?php 
                if (isset($ere)) {
                echo "<span style='color:red;'>".$ere."</span>";
                }
            ?>
            <label class="form-label">Admin Registration Date</label>
            <input type="text" class="form-control" value="<?php echo $data['created_at']; ?>" readonly>
            
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
