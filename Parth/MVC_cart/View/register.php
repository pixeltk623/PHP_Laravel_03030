<?php 

    $pageTitle = 'Cool T-Shirt Shop - Customer';
    $metaDesc = 'Demo PHP shopping cart get products from database';
    include('View/header.php');

?>
    <div>
        <h1>Register</h1>
        <?php
            if (isset($message)) {
                echo $message;
            }
        ?>
        <hr>
        <form method="POST">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            <?php 
                if (isset($ern)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <br>
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
            <?php 
                if (isset($ere)) {
                echo "<span style='color:red;'>".$ere."</span>";
                }
            ?>
            <br>
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="pass">
            <?php 
                if (isset($erp)) {
                echo "<span style='color:red;'>".$erp."</span>";
                }
            ?>
            <br>
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="conpass">
            <?php 
                if (isset($ercp)) {
                echo "<span style='color:red;'>".$ercp."</span>";
                }
            ?>
            <label class="form-label">Mobile</label>
            <input type="text" class="form-control" name="mobile">
            <?php 
                if (isset($erm)) {
                echo "<span style='color:red;'>".$erm."</span>";
                }
            ?>
            <br>
            <br>
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
            <?php 
                if (isset($era)) {
                echo "<span style='color:red;'>".$era."</span>";
                }
            ?>
            <br>
            <label class="form-label">Address Details:</label>
            <div class="form-group row">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="City" name="city">
                    <?php 
                        if (isset($erc)) {
                        echo "<span style='color:red;'>".$erc."</span>";
                        }
                    ?>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="State" name="state">
                    <?php 
                        if (isset($ers)) {
                        echo "<span style='color:red;'>".$ers."</span>";
                        }
                    ?>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Pincode" name="pin">
                    <?php 
                        if (isset($erpin)) {
                        echo "<span style='color:red;'>".$erpin."</span>";
                        }
                    ?>
                </div>
            </div>
            <br>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" name="add" value="Register">
            </div>
        </form>
        <br><br>
    </div>
<?php include('View/footer.php');?>