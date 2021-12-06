<?php
    session_start();
    include_once 'config.php';

    if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {

    $query = "SELECT * FROM category";

    $res = mysqli_query($conn, $query);
    $response = array();
    while($response[] = mysqli_fetch_assoc($res)) {}
    $finalData = array_filter($response);
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
        <h1>Manage Category</h1>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>Sr. No.</th>
                <th>Category Name</th>
                <th>Creation Date</th>
                <th>Action</th>
            </tr>
            <?php
                if(count($finalData)<1) {
            ?>
                <tr>
                    <th colspan="4" class="text-center text-danger">No Record Found</th>
                </tr>
                <?php
            }  else {

                foreach ($finalData as $key => $value) {            
            ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['created_at']; ?></td>
                <td><a href="update_category.php?id=<?php echo $value['id']; ?>">Edit Details</a></td>
            </tr>
            <?php
                }
                }
            ?>

        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>
<?php 
    } else {
        header("Location: index.php");
    }
?>