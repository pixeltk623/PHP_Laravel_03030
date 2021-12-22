<?php 

    $pageTitle = 'Cool T-Shirt Shop - Customer';
    $metaDesc = 'Demo PHP shopping cart get products from database';
    include('View/header.php');
?>
    <div class="row">
        <h1>Customer</h1>
        <?php
            if (isset($message)) {
                echo $message;
            }
        ?>
        <hr>
        <form method="POST">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $res['name']; ?>">
            <?php 
                if (isset($ern)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $res['email']; ?>">
            <?php 
                if (isset($ere)) {
                echo "<span style='color:red;'>".$ere."</span>";
                }
            ?>
            <label class="form-label">Mobile</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $res['mobile']; ?>">
            <?php 
                if (isset($erm)) {
                echo "<span style='color:red;'>".$erm."</span>";
                }
            ?>
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address"  value="<?php echo $res['address']; ?>">
            <?php 
                if (isset($era)) {
                echo "<span style='color:red;'>".$era."</span>";
                }
            ?>
            <label class="form-label">Address Details:</label>
            <div class="form-group row">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="City" name="city"  value="<?php echo $res['city']; ?>">
                    <?php 
                        if (isset($erc)) {
                        echo "<span style='color:red;'>".$erc."</span>";
                        }
                    ?>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="State" name="state" value="<?php echo $res['state']; ?>">
                    <?php 
                        if (isset($ers)) {
                        echo "<span style='color:red;'>".$ers."</span>";
                        }
                    ?>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Pincode" name="pin"  value="<?php echo $res['pincode']; ?>">
                    <?php 
                        if (isset($erpin)) {
                        echo "<span style='color:red;'>".$erpin."</span>";
                        }
                    ?>
                </div>
            </div>
            <br>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" name="update" value="Update">
            </div>
        </form>
        <br><br>
    </div>
    </div>
<?php include('View/footer.php');?>
