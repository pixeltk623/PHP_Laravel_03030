<?php 

    if (isset($_POST['search'])) {
        
        $gid=$_POST['id'];

        if ($gid=="") {
            $err="Can not be empty.";
        }

        if (!isset($err)) {
        
            $query = "SELECT p.*, c.name AS cname FROM pass AS p LEFT JOIN category AS c ON c.id = p.category WHERE p.pass_number='".$gid."'";

            $res = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($res);    
        }

    }
?>
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
        <a href="login" class="btn btn-outline-danger" style="margin-left: 1000px;">Login</a>
        </div>    
    </header>
    
    <main>
      <div>
        <img src="img/e-pass-management-script.jpg" class="w-100">
      </div>
    </main>
    <footer>
        <br><br><br>
    </footer>   
  
</body>
</html>