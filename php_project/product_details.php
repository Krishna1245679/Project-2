<?php 
	require "header.php";
?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Product Details</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


	<!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                                <?php
                                    
                                    include "config.php";
                                    $id = $_GET['id'];
                                    $p = "select * from `product` where id ='$id' limit 1";
                                    $fetch = mysqli_query($con, $p);
                                    foreach ($fetch as $pro) {
                                    ?>
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">

                            <a class="pt active" href="#product-1">
                                <img src="upload/<?php echo $pro['image'];?>" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="upload/<?php echo $pro['image']; ?>" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="upload/<?php echo $pro['image']; ?>" alt="">
                            </a>
                            
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src=" upload/<?php echo $pro['image']; ?>" alt="">
                                <img data-hash="product-2" class="product__big__img" src="upload/<?php echo $pro['image']; ?>" alt="">
                                <img data-hash="product-3" class="product__big__img" src="upload/<?php echo $pro['image']; ?>" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3><?php echo $pro['name']; ?> <span></span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            
                        </div>
                        <div class="product__details__price"> Rs. <?php echo $pro['price']; ?><span>Rs. 83.0</span></div>
                        <p><?php echo $pro['description']; ?></p>
                               
                        
                        <div class="product__details__button">
                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                            <a href="addtocart.php?id=<?php echo $pro['id'];?>" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
                            
                        </div>


                        <div class="product__details__widget">
                            <ul>
                                
                                <li>
                                    <span>Available color:</span>
                                    <div class="color__checkbox">
                                        <label for="red">
                                            <input type="radio" name="color__radio" id="red" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="black">
                                            <input type="radio" name="color__radio" id="black">
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        <label for="grey">
                                            <input type="radio" name="color__radio" id="grey">
                                            <span class="checkmark grey-bg"></span>
                                        </label>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                
                                <p><?php echo $pro['description']; ?></p>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>


                       <?php 
                         }
                        ?>


                            
                        </div>
                    </div>  
             </div>
        </div>
    </section>
    <!-- Product Details Section End -->

     <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->

    
<?php 
    require "footer.php";
?>