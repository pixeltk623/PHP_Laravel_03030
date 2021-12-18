<?php
if(isset($_GET['product']) && !empty($_GET['product']) && is_numeric($_GET['product']))
    {
        $featured=1;
        $productID = $_GET['product'];
        $getProductData=$this->getsp($featured,$productID);

        if(sizeof($getProductData) > 0 )
        {
            $imgUrl = PRODUCT_IMG_URL.str_replace(' ','-',strtolower($getProductData ['product_name']))."/".$getProductData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }
    else
    {
        $error = '404! No record found';
    }

if(isset($_POST['add_to_cart']) && $_POST['add_to_cart'] == 'add to cart')
{
    $productID = intval($_POST['product_id']);
    $productQty = intval($_POST['product_qty']);
    
    $fetchProduct = $this->getsp($featured,$productID);

    $calculateTotalPrice = number_format($productQty * $fetchProduct['price'],2);
    
    $cartArray = [
        'product_id' =>$productID,
        'qty' => $productQty,
        'product_name' =>$fetchProduct['product_name'],
        'product_price' => $fetchProduct['price'],
        'total_price' => $calculateTotalPrice,
        'product_img' =>$fetchProduct['img']
    ];
    
    if(isset($_SESSION['cart_items']) && !empty($_SESSION['cart_items']))
    {
        $productIDs = [];
        foreach($_SESSION['cart_items'] as $cartKey => $cartItem)
        {
            $productIDs[] = $cartItem['product_id'];
            if($cartItem['product_id'] == $productID)
            {
                $_SESSION['cart_items'][$cartKey]['qty'] = $productQty;
                $_SESSION['cart_items'][$cartKey]['total_price'] = $calculateTotalPrice;
                break;
            }
        }

        if(!in_array($productID,$productIDs))
        {
            $_SESSION['cart_items'][]= $cartArray;
        }

        $successMsg = true;
        
    }
    else
    {
        $_SESSION['cart_items'][]= $cartArray;
        $successMsg = true;
    }

}
?>