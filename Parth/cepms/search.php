<?php
    
    session_start();
    include_once 'config.php';

    if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {


    if (isset($_POST['search'])) {


        $id=$_POST['id'];
        if ($id=="") {
            $err="Can not be empty.";
        }

        if (!isset($err)) {
        
            $query = "SELECT * FROM pass WHERE pass_number='$id' OR mobile = '$id'";

            $res = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($res);    
        }

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
        <h1>Search Pass</h1>
        <hr>
        <form method="post">
            <label class="form-label">Search by Pass Number/Mobile Number</label>
            <input type="text" class="form-control" name="id">
            <?php 
                if (isset($err)) {
                echo "<span style='color:red;'>".$err."</span>";
                }
            ?>
            <br>
            <input type="submit" class="btn btn-primary" name="search" value="Search">
        </form>
        <br>
        <?php if (isset($data)) { ?>
        <h3 class="text-center text-secondary">Result against "<?php echo $id; ?>" keyword.</h3>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>Sr. No.</th>
                <th>Pass Number</th>
                <th>Full Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Creaction Date</th>
                <th>Action</th>
            </tr>
            <?php
                if(count($data)<1) {
            ?>
                <tr>
                    <th colspan="7" class="text-center text-danger">No Record Found</th>
                </tr>
                <?php
            }  else {           
            ?>
            <tr>
                <td>1</td>
                <td><?php echo $data['pass_number']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['mobile']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['created_at']; ?></td>
                <td>
                    <a href="view_pass.php?id=<?php echo $data['id']; ?>">View</a> || 
                    <a href="update_pass.php?id=<?php echo $data['id']; ?>">Edit</a>
                </td>
            </tr>
            <?php
                }
            ?>

        </table>

    <?php }?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>
<?php 
    } else {
        header("Location: index.php");
    }
?>