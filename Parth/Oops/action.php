<?php 
    include_once "crud.php";
    
    $obj=new show();
    $data=$obj->start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OOPS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">
    <br>
    <h2 style="text-align: center; color: blue;">Profile | Show</h2>
    <br>
    <a href="index.php" class="btn btn-primary">Home</a>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($data)<1) {
                    ?>
                    <tr>
                        <th colspan="8" class="text-center text-danger">No Record Found</th>
                    </tr>
                    <?php
                }  else {

                    foreach ($data as $key => $value) {
                
                ?>
                <tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['gender']; ?></td>
                    <td><?php echo $value['hobby']; ?></td>
                    <td><?php echo $value['dob']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $value['id']; ?>"">Edit</a> || 
                        <a href="delete.php?id=<?php echo $value['id']; ?>">Delete</a>
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

                    