<?php 
    include_once "config.php";

    $query = "SELECT a.name,b.productImage,b.product_id FROM products AS a JOIN product_images AS b WHERE a.id=b.product_id";

    $res = mysqli_query($conn, $query);
    $response = array();
    while($response[] = mysqli_fetch_assoc($res)) {}

    $finalData = array_filter($response);
    
    // echo "<pre>";

    // print_r($finalData);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">
    <h2 style="text-align: center; color: blue;">New Employee Registration</h2>
    <br>
    <a href="multiple_file.php" class="btn btn-primary">Add New Products</a>
    <br><br>
    <div class="table-responsive">
        <table class="table table-bordered table-lg">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($finalData)<1) {
                    ?>
                    <tr>
                        <th colspan="5" class="text-center text-danger">No Record Found</th>
                    </tr>
                    <?php
                }  else {

                    foreach ($finalData as $key => $value) {
                
                ?>
            	<tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td>
                        <?php
                            if ($value['productImage']!='') {
                                ?>
                                <img src="uploads/<?php echo $value['productImage']; ?>" width="100" height="100">
                                <?php
                            } else {
                                ?>
                                No Pic Found
                                <?php
                            }
                        ?>                        
                    </td>
                    <td><?php echo $value['product_id']; ?></td>
                    <td>
                        <a href="" class="btn btn-warning">Show</a>
                        <a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-secondary">Edit</a>
                        <a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
