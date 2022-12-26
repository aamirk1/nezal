<?php require('header.php');
$cat_res=mysqli_query($con,"Select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
   $cat_arr[]=$row;
}
$resBanner=mysqli_query($con,"select * from banner where status='1' order by order_no asc")

?>

    
<div class="body__overlay"></div>
    <?php if(mysqli_num_rows($resBanner)>0){?>        
    <div class="slider__container slider--one bg__cat--3">
        <div class="slide__container slider__activation__wrap owl-carousel">
            <?php while($rowBanner=mysqli_fetch_assoc($resBanner)){?>
            <div class="single__slide animation__style01 slider__fixed--height">
                <div class="container">
                    <div class="slide__thumb">
                        <a href="<?php echo $rowBanner['btn_link']?>"><img height="540px"  width="1200px" src="<?php echo BANNER_IMAGE_SITE_PATH.$rowBanner['image']?>"></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>
<div class="container">
   <div class="row mt-5">
      <div class="row text-center">
         <H1 style="color:maroon;margin-top: 30px;margin-bottom: 15px;font-family:Domine Sans-serif;">Nezal’s Pledge</H1>
      </div>
   </div>
   <div class="row pledge">
      <p style="line-height:25px;">
      Nezal’s range of products are 100% natural and vegetable products like shea butter, Coco butter, Aloe vera, Olive oil, Pure Milk, Turmeric, Aromatherapy oils, Natural Herbal Scrubs etc.
      </p>
      <p style="line-height:25px;">
      Nezal’s range of natural toilet amenities like herbal soaps, shampoo, conditioner, oil, scrub, bubble bath and body lotion are well accepted and solicited by major players in the hospitality industry to pamper their clients and enhance their customers loyalty.
      </p>
      <p style="line-height:25px;">
      At Nezal we believe in creating the best of products from basic raw ingredients derived from nature, hence we create our own soap base, in-house, by reacting the caustic materials with select range of oils [Coconut oil, Palm kernel oil, etc.] and we are sure of consistent quality and claim all our soap products to be of 100% vegetarian origin as we avoid any kind of animal fats in our process.
      </p>
   </div>
</div>

<div class="container-fluid mt-5">
   <div class="row mt-5">
      <div class="col-xl-12">
         <div class="row mt-5 text-center">
            <H1 style="color:maroon;margin-top: 30px;margin-bottom: 15px;font-family:Domine Sans-serif;">Shop Our Collections</H1>
         </div>
         <div class="container-fluid mtb--10" style="background-color:#FAF4EA;">
               <div class="row mt--60 mb--20 ptb--20">
                  <div class="col-lg-3">
                     <a href=""><img class="ourcollection" src="https://i0.wp.com/nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-18.jpg" alt="ourshopcollection"></a>
                  </div>
                  <div class="col-lg-3">
                     <a href=""><img class="ourcollection" src="images/ourshopcollection/7.jpg" alt="ourshopcollection"></a>
                  </div>
                  <div class="col-lg-3">
                     <a href=""><img class="ourcollection" src="images/ourshopcollection/2(1).jpg" alt="ourshopcollection"></a>
                  </div>
                  <div class="col-lg-3">
                     <a href=""><img class="ourcollection" src="images/ourshopcollection/5.jpg" alt="ourshopcollection"></a>
                  </div>
               </div>

               <div class="row mt--15 mb--90 ptb--20">
                  <div class="col-lg-3">
                     <a href=""><img class="ourcollection" src="images/ourshopcollection/4.jpg" alt="ourshopcollection"></a>
                  </div>
                  <div class="col-lg-3">
                     <a href=""><img class="ourcollection" src="images/ourshopcollection/1.jpg" alt="ourshopcollection"></a>
                  </div>
                  <div class="col-lg-3">
                     <a href=""><img class="ourcollection" src="images/ourshopcollection/3.jpg" alt="ourshopcollection"></a>
                  </div>
                  <div class="col-lg-3">
                     <a href=""><img class="ourcollection" src="https://i0.wp.com/nezalherbocare.com/wp-content/uploads/2022/11/Aissis-Soap-21.jpg" alt="ourshopcollection"></a>
                  </div>
               </div>
         </div>
      </div>
   </div>
</div>

<div class="container mt-5">
   <div class="row mt-5">
      <div class="col-xl-12">
         <div class="row mt-5 text-center">
            <H1 style="color:maroon;margin-top: 30px;margin-bottom: 15px;font-family:Domine Sans-serif;">Shop By Category</H1>
         </div>
      </div>
   </div>
</div>

<div class="container mt-5">
   <div class="row mt-5">
      <div class="col-xl-12">
         <div class="row mt-5 text-center">
            <H1 style="color:maroon;margin-top: 30px;margin-bottom: 15px;font-family:Domine Sans-serif;">Nezal's Range Of Products</H1>
         </div>
      </div>
   </div>
   <section class="htc__category__area ptb-50">
      <div class="container product__container">
         <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt-10">
                    <?php
                    $get_product=get_product($con,4);
                    foreach($get_product as $list){
                    ?>
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product.php?id=<?php echo $list['id']?>">
                                    <img class="border border-warning" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
                                    <li><a href="product.php?id=<?php echo $list['id']?>" ><i class="icon-handbag icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product-details.html"><?php echo $list['name']?></a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize"><strike>₹ <?php echo $list['mrp']?></strike></li>
                                    <li class="new__price">₹ <?php echo $list['price']?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
      </div>
   </section>

   <section class="htc__category__area" style="margin-top: 50px;">
      <div class="container">
         <div class="col-lg-4">
            <div class="row">
               <img src="https://i0.wp.com/nezalherbocare.com/wp-content/uploads/2022/09/Range-Of-Organic-Products-1-e1662790241572.jpg?fit=693%2C1024&amp;ssl=1" class="attachment-large size-large wp-image-123" alt="" loading="lazy" srcset="https://i0.wp.com/nezalherbocare.com/wp-content/uploads/2022/09/Range-Of-Organic-Products-1-e1662790241572.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row mt-5 text-center" style="margin-left: 10px;font-family:Domine Sans-serif;">
               <H1 style="color:maroon;margin-top: 30px;margin-bottom: 15px;font-family:Domine Sans-serif;">Aim</H1>
               <div>
                  <h1 class="pledge"style="line-height:30px;">Introducing Nezal, the luxurious brand that deals with a range of organic skincare products. If you’re looking to take your beauty routine to the next level, then look no further than Nezal. Our products are made with only the finest ingredients and are designed to nourish and revitalize your skin. Trust us, your skin will thank you for using Nezal!

ROOP is a range of organic products for enhancing your natural beauty. Nezal products are made with natural ingredients and are free from harsh chemicals. They are gentle on the skin and help to keep your skin looking young and radiant.</h1>
               </div>
            </div>
        </div>
      </div>
   </section>


</div>
<?php 
require('footer.php');
ob_flush();
?>




<!-- start section first -->



        

<!-- end section first -->

<!-- 
<section>
   
   <div class="row mt-5 text-center">
      <H1 style="color:maroon;">Shop by Category</H1>
   </div>
   
   <div class="container mt-10">
      <div class="row mt-5">
         <H1 style="color:#003D13;">Face Care</H1>
      </div>
         <div class="col-lg-12 mt-5">
            
            <div class="col-lg-3">
               <div class="row">
                  <a href=""><img decoding="async" class="border border-warning" width="600" height="250" src="	https://nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-18.jpg" alt="">
               </a>
               </div>               
            </div>
            
            <div class="col-lg-3">
               <div class="row">
                  <a href=""><img decoding="async" class="border border-warning" width="600" height="250" src="https://nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-20.jpg">
               </a>
               </div>               
            </div>
            
            <div class="col-lg-3">
               <div class="row">
                  <a href=""><img decoding="async" class="border border-warning" width="600" height="250" src="https://nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-11.jpg"></a>
               
               </div>               
            </div>
            <div class="col-lg-3">
               <div class="row">
               <a href="index.php"><img decoding="async" class="border border-warning" width="600" height="250" src="https://nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-14.jpg"></a>
               
               </div>               
            </div>               
         </div>

   </div>

   <div class="container mt-10">
      <div class="row mt-5">
         <H1 style="color:#003D13;">Body Care</H1>
      </div>
         <div class="col-lg-12 mt-5">
            
            <div class="col-lg-3">
               <div class="row">
                  <a href=""><img decoding="async" class="border border-3 border-warning" width="600" height="250" src="	https://nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-18.jpg" alt="">
               </a>
               </div>               
            </div>
            
            <div class="col-lg-3">
               <div class="row">
                  <a href=""><img decoding="async" class="border border-3 border-warning" width="600" height="250" src="https://nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-20.jpg">
               </a>
               </div>               
            </div>
            
            <div class="col-lg-3">
               <div class="row">
                  <a href=""><img decoding="async" class="border border-3 border-warning" width="600" height="250" src="https://nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-11.jpg"></a>
               
               </div>               
            </div>
            <div class="col-lg-3">
               <div class="row">
               <a href="index.php"><img decoding="async" class="border border-3 border-warning" width="600" height="250" src="https://nezalherbocare.com/wp-content/uploads/2022/10/Aissis-Soap-14.jpg"></a>
               
               </div>               
            </div>               
         </div>

   </div>

   <div class="container mt-10">
      <div class="row mt-5">
         <H1 style="color:#003D13;">Hair Care</H1>
      </div>
         <div class="col-lg-12 mt-5">
            
            <div class="col-lg-3">
               <div class="row">
                  <a href=""><img decoding="async" class="border border-warning" width="600" height="250" src="https://i0.wp.com/nezalherbocare.com/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-30-at-6.35.02-PM.jpeg" alt="">
               </a>
               </div>               
            </div>
            
            <div class="col-lg-3">
               <div class="row">
                  <a href=""><img decoding="async" class="border border-warning" width="600" height="250" src="https://i0.wp.com/nezalherbocare.com/wp-content/uploads/2022/12/Untitled-design-2022-12-05T121508.850.jpg">
               </a>
               </div>               
            </div>
                          
         </div>

   </div>
</section>   -->