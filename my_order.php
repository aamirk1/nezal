<?php 
require('header.php');
?>
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/44.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.php">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">My Order</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wishlist-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wishlist-content">
                    <form action="#">
                        <div class="wishlist-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Order ID</th>
                                        <th class="product-name"><span class="nobr"> Order Date </span></th>
                                        <th class="product-price"><span class="nobr"> Address </span></th>
                                        <th class="product-stock-stauts"><span class="nobr"> Payment Type </span></th>
                                        <th class="product-add-to-cart"><span class="nobr"> Payment Status</span></th>
                                        <th class="product-add-to-cart"><span class="nobr"> Order Status</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $uid=$_SESSION['USER_ID'];
                                    $res=mysqli_query($con,"select `order`.*, order_status.name as order_status_str from `order`,order_status where `order`.user_id='$uid' and order_status.id=`order`.order_status");
                                    while ($row=mysqli_fetch_assoc($res)) {
                                    ?>                                   
                                    <tr>
                                        <td class="product-add-to-cart"><a href="my_order_details.php?id=<?php echo $row['id']?>"> <?php echo $row['id']?></a>
                                        
                                        <div class="pdf_do" style="text-align:center;"><a href="order_pdf.php?id=<?php echo $row['id']?>">PDF</a></div>
                                        </td>
                                        <td class="product-name"> <?php echo $row['added_on']?>
                                        </td>
                                        
                                        <td class="product-name"> 
                                        <?php echo $row['address']?><br/>
                                        <?php echo $row['city']?><br/>
                                        <?php echo $row['pincode']?><br/>
                                        </td>
                                        <td class="product-name"> <?php echo $row['payment_type']?></td>
                                        <td class="product-name"> <?php echo $row['payment_status']?></td>
                                        <td class="product-name"> <?php echo $row['order_status_str']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('footer.inc.php')?>
        