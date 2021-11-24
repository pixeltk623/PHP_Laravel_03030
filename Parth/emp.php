<?php 
    include_once "config.php";
    $query = "SELECT * FROM employees";

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
    <a href="emp_input.php" class="btn btn-primary">Add New Employee</a>
    <br><br>
    <div class="table-responsive">
        <table class="table table-bordered table-lg">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Hobby</th>
                    <th>dob</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($finalData)<1) {
                    ?>
                    <tr>
                        <th colspan="8" class="text-center text-danger">No Record Found</th>
                    </tr>
                    <?php
                }  else {

                    foreach ($finalData as $key => $value) {
                
                ?>
            	<tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['gender']; ?></td>
                    <td><?php echo $value['hobby']; ?></td>
                    <td><?php echo $value['dob']; ?></td>
                    <td><?php echo $value['created at']; ?></td>
                    <td><?php echo $value['updated at']; ?></td>
                
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
