<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/cepms/config.php');

    if (isset($_POST['login'])) {
        
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $newpass=$_POST['newpass'];
        $conpass=$_POST['conpass'];

        if ($email=="") {
            $ere="Email can not be empty.";
        }
        if ($mobile=="") {
            $erm="Mobile can not be empty.";
        }
        if ($newpass=="") {
            $ernp="New Password can not be empty.";
        }
        if ($conpass=="") {
            $ercp="Confirm Password can not be empty.";
        }


        if (!isset($ere) && !isset($erm) && !isset($ernp) && !isset($ercp)) {
            $query = "SELECT * FROM admin WHERE email='".$email."'";
            echo $query;

            $res = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($res);
            if(sizeof($data)>0){
                
                if ($pass==$data['password']) {
                    header("Location: ".$_SERVER['DOCUMENT_ROOT']."/cepms/dashboard.php");    
                } else {
                    $erp="Password does not match.";
                }
            } else {
                $ere="Email does not match.";
            }
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

<header class="sticky-top bg-secondary">
    <div class="container d-flex align-items-center">
    <h1><a href="index.php">CePMS</a></h1>
    </div>    
</header>

<main>
    <br><br>
	<div class="container">
		<div class="card col-sm-4"  style="margin: auto; width: 50%; padding: 10px;">
            <article class="card-body">
                <h4 class="card-title mb-4 mt-1">Reset Your Password</h4>
                <form method="post">
                    <div class="form-group">
                        <label>Your email</label>
                        <input name="email" class="form-control" placeholder="Email" type="email">
                        <?php
                            if (isset($ere)) {
                            echo "<span style='color:red;'>".$ere."</span>";
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input name="mobile" class="form-control" placeholder="Mobile" type="text">
                        <?php
                            if (isset($erm)) {
                            echo "<span style='color:red;'>".$erm."</span>";
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>New password</label>
                        <input class="form-control" placeholder="******" type="password" name="newpass">
                        <?php 
                            if (isset($ernp)) {
                            echo "<span style='color:red;'>".$ernp."</span>";
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input class="form-control" placeholder="******" type="password" name="conpass">
                        <?php 
                            if (isset($ercp)) {
                            echo "<span style='color:red;'>".$ercp."</span>";
                            }
                        ?>
                    </div>
                    <div class="form-group"> 
                    <div>
                        <a href="login.php">Already have an account</a>
                    </div>
                    </div>  
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="submit"> Submit  </button>
                    </div>                                                           
                </form>
            </article>
        </div>

    </div>
</main>
<footer>
    <br><br><br>
</footer>   
  
</body>
</html>