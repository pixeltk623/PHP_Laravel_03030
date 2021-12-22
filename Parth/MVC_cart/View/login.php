<?php
    

    $pageTitle = 'Cool T-Shirt Shop - Login';
    $metaDesc = 'Demo PHP shopping cart get products from database';
    include('View/header.php');

    
?>
<main>
    <br><br><br><br>
	<div class="container">
		<div class="card col-sm-4"  style="margin: auto; width: 50%; padding: 10px;">
            <article class="card-body">
                <h4 class="card-title mb-4 mt-1">Sign in<a href="register" class="btn btn-primary float-right">Sign-up</a></h4>
                
                <form method="post">
                    <div class="form-group">
                        <label>Email / Username</label>
                        <input name="email" class="form-control" placeholder="Email / Username" type="text">
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
<?php include('View/footer.php');?>
