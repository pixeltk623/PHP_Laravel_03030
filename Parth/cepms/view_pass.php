<?php
    include_once 'config.php';

    if (isset($_GET['id'])) {
        $gid=$_GET['id'];

        $query = "SELECT p.*, c.name AS cname FROM pass AS p LEFT JOIN category AS c ON c.id = p.category WHERE p.id=".$gid;

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
        <h1>View Pass</h1>
        <hr>
        <table class="table table-bordered">
            <tr>
                <td colspan="4" class="text-center">
                    <h2 class="text-primary">Pass Number: <?php echo $data['pass_number']; ?></h2>
                </td>
            </tr>
            <tr>
                <th>Catgory</th>
                <td colspan="3">
                    <?php echo $data['cname']; ?>
                </td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td colspan="3">
                    <?php echo $data['name']; ?>
                </td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td>
                    <?php echo $data['mobile']; ?>
                </td>
                <th>Email</th>
                <td>
                    <?php echo $data['email']; ?>
                </td>
            </tr>
            <tr>
                <th>Identity Type</th>
                <td>
                    <?php echo $data['identity_type']; ?>
                </td>
                <th>Identity Card Number</th>
                <td>
                    <?php echo $data['identity_card_no']; ?>
                </td>
            </tr>
            <tr>
                <th>From Date</th>
                <td>
                    <?php echo $data['from_date']; ?>
                </td>
                <th>To Date</th>
                <td>
                    <?php echo $data['to_date']; ?>
                </td>
            </tr>
            <tr>
                <th>Pass Creatiion Date</th>
                <td colspan="3">
                    <?php echo $data['created_at']; ?>
                </td>
            </tr>
        </table>
        <div class="text-center">
            <a href="view_pass.php?id=1" class="btn btn-outline-danger">Print</a>    
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>