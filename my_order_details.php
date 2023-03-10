<?php 
require('header.php');

if(!isset($_SESSION['USER_LOGIN'])){
    ?>
    <script>
        window.location.href='index.php';
    </script>
    <?php
   
}

$order_id=get_safe_value($con,$_GET['id']);
$coupon_details=mysqli_fetch_assoc(mysqli_query($con,"select coupon_value from `order` where id='$order_id'"));
$coupon_value=$coupon_details['coupon_value'];
if($coupon_value==''){
    $coupon_value=0;
}
$total_price=0;
?>
<div class="container">
    <div class="col-xs-12 bradcaump__inner">
            <nav class="bradcaump-inner">
                <a class="breadcrumb-item" href="index.php">Home</a>
                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                <span class="breadcrumb-item active">Order Details</span>
            </nav>
        </div>
</div>
<div class="wishlist-area ptb--50 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                
                <div class="wishlist-content">
                    <form action="#">
                        <div class="wishlist-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Product Image</th>
                                        <th class="product-name">Product Name</th>
                                        <th class="product-quantity" style="width:70px;">Qty</th>
                                        <th class="product-price" style="width:140px;">Price</th>
                                        <th class="product-subtotal" style="width:170px;">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $uid=$_SESSION['USER_ID'];
                                    $res=mysqli_query($con,"select distinct(order_details.id), order_details.*,product.name,product.image from order_details,product, `order` where order_details.order_id='$order_id' and `order`.user_id='$uid' and order_details.product_id=product.id");
                                    $total_price=0;                                    
                                    while ($row=mysqli_fetch_assoc($res)) {
                                    $total_price=$total_price+($row['qty']*$row['price']);
                                    ?>                                    
                                    <tr>
                                        
                                        <td class="product-thumbnail"> <img style="width: 20px; height: 30px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"></td>
                                        <td class="product-name"> <?php echo $row['name']?></td>
                                        <td class="product-quantity"> <?php echo $row['qty']?></td>
                                        <td class="product-price"> <?php echo $row['price']?></td>
                                        <td class="product-subtotal"> <?php echo $row['qty']*$row['price']?></td>
                                    </tr>
                                    <?php } 
                                    if($coupon_value!=""){
                                    ?>
                                    <tr>
                                        <td colspan="3-name"></td>
                                        <td class="product-name"> Coupon Value</td>
                                        <td class="product-name"> <?php echo $coupon_value?></td>
                                    </tr>
                                    <?php } ?>
                                    
                                    <tr>
                                        <td colspan="3-name"></td>
                                        <td class="product-name"> Total Price</td>
                                        <td class="product-name"> <?php 
                                        echo $total_price - $coupon_value;
                                        ?></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('footer.php')?>
        