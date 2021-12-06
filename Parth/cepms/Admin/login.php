<?php 
    // echo $_SERVER['DOCUMENT_ROOT']."/cepms/dashboard.php";
    // die;
    include_once($_SERVER['DOCUMENT_ROOT'].'/cepms/config.php');

    if (isset($_POST['login'])) {
        
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        if ($email=="") {
            $ere="Email can not be empty.";
        }
        if ($pass=="") {
            $erp="Password can not be empty.";
        }


        if (!isset($ere) && !isset($erp)) {
            $query = "SELECT * FROM admin WHERE email='".$email."'";

            $res = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($res);
            if(sizeof($data)>0){
                
                if ($pass==$data['password']) {
                    header("Location: http://localhost/cepms/dashboard.php");    
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
        <br><br><br><br>
    	<div class="container">
    		<div class="card col-sm-4"  style="margin: auto; width: 50%; padding: 10px;">
                <article class="card-body">
                    <a href="" class="float-right btn btn-outline-primary">Sign up</a>
                    <h4 class="card-title mb-4 mt-1">Sign in</h4>
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
                            <a class="float-right" href="forgot_pass.php">Forgot?</a>
                            <label>Your password</label>
                            <input class="form-control" placeholder="******" type="password" name="pass">
                            <?php 
                                if (isset($erp)) {
                                echo "<span style='color:red;'>".$erp."</span>";
                                }
                            ?>
                        </div>
                        <div class="form-group"> 
                        <div class="checkbox">
                            <label> <input type="checkbox"> Keep me signed in </label>
                        </div>
                        </div>  
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="login"> Login  </button>
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