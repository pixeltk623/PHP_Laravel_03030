<?php 

    
  
    
	
	$pageTitle = 'Demo PHP Shopping cart checkout page with Validation';
	$metaDesc = 'Demo PHP Shopping cart checkout page with Validation';
	
    include('View/header.php');
?>
<div>
    <br>
    <div>
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill"><?php echo $cartItemCount;?></span>
      </h4>
      <ul class="list-group mb-3">
        <?php
            $total = 0;
            foreach($_SESSION['cart_items'] as $cartItem)
            {
                $total+=$cartItem['total_price'];
            ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><?php echo $cartItem['product_name'] ?></h6>
                        <small class="text-muted">Quantity: <?php echo $cartItem['qty'] ?> X Price: <?php echo $cartItem['product_price'] ?></small>
                    </div>
                    <span class="text-muted">$<?php echo $cartItem['total_price'] ?></span>
                </li>
        <?php
            }
        ?>
       
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$<?php echo number_format($total,2);?></strong>
        </li>
      </ul>
    </div>
    <hr>
    <div>
      <h4 class="mb-3">Billing address</h4>
      <?php 
        if(isset($errorMsg) && count($errorMsg) > 0)
        {
            foreach($errorMsg as $error)
            {
                echo '<div class="alert alert-danger">'.$error.'</div>';
            }
        }
      ?>
      <table class="table">
          <tr>
              <th>Name</th>
              <td><?php echo $res['name']; ?></td>
          </tr>
          <tr>
              <th>Email</th>
              <td><?php echo $res['email']; ?></td>
          </tr>
          <tr>
              <th>Mobile</th>
              <td><?php echo $res['mobile']; ?></td>
          </tr>
          <tr>
              <th>Address</th>
              <td><?php echo $res['address']; ?></td>
          </tr>
          <tr>
              <th>City</th>
              <td><?php echo $res['city']; ?></td>
          </tr>
          <tr>
              <th>State</th>
              <td><?php echo $res['state']." - ".$res['pincode']; ?></td>
          </tr>
      </table>
      <hr>
      <form method="POST">
          <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="cashOnDelivery" name="cashOnDelivery" type="radio" class="custom-control-input" checked="" >
                <label class="custom-control-label" for="cashOnDelivery">Cash on Delivery</label>
              </div>
            </div>
           
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="submit">Continue to checkout</button>
      </form>
      <br><br>
    </div>    
</div>
<?php include('View/footer.php'); ?>