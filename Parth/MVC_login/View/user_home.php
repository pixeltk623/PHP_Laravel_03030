<!DOCTYPE html>
<html lang="en">
<head>
    <title>CePMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

  <header class="sticky-top bg-primary">
        <div class="container d-flex align-items-center">
        <h1>CePMS</h1>
        <a href="Admin/login" class="btn btn-outline-danger" style="margin-left: 1000px;">Admin</a>
        </div>    
    </header>
    
    <main>
      <div>
        <img src="img/e-pass-management-script.jpg" class="w-100">
      </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h2>Search Your Pass!</h2>
                </div>
                <div class="col-10">
                    <form class="row" method="post">
                        <input type="text" placeholder="Enter Your Pass Number" class="form-control col-8" name="id">
                        <?php 
                            if (isset($err)) {
                            echo "<span style='color:red;'>".$err."</span>";
                            }
                        ?>
                        <div class="col-1"></div>
                        <input type="submit" class="btn btn-primary" name="search" value="Search">
                    </form>
                </div>
            </div>
            <br>
            <?php if (isset($data)) { ?>
            <div>
                <h3 class="text-center text-secondary">Result against "<?php echo $gid; ?>" keyword.</h3>
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
                        <th>Pass Creation Date</th>
                        <td colspan="3">
                            <?php echo $data['created_at']; ?>
                        </td>
                    </tr>
                </table>
            </div>
        <?php } ?>
        </div>
    </main>
    <footer>
        <br><br><br>
    </footer>   
  
</body>
</html>