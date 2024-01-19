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
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="shop__sidebar">
                    <div class="sidebar__categories">
                        <div class="section-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                                <?php
                                include "config.php";
                                $q = "select * from category";
                                $result = mysqli_query($con, $q);
                                foreach ($result as $data) {
                                ?>
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#collapse<?php echo $data['id']; ?>"><?php echo $data['name']; ?></a>
                                        </div>
                                        <div id="collapse<?php echo $data['id']; ?>" class="collapse " data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <?php
                                                    $s = "select * from subcategory where category_id='" . $data['id'] . "'";
                                                    $exe = mysqli_query($con, $s);
                                                    foreach ($exe as $sub) {
                                                    ?>
                                                        <li><a href="javascript:void(0)" onclick="window.location.assign('product.php?id=<?php echo $sub['id']; ?>');"><?php echo $sub['name']; ?></a></li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
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
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <?php
                    $id = $_GET['id'];
                    $p = "select * from `product` where subcategory_id='$id'";
                    $fetch = mysqli_query($con, $p);
                    foreach ($fetch as $pro) {
                    ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="upload/<?php echo $pro['image'];?>" style="background-size:100% 100%;">
                                    <ul class="product__hover">
                                        <li><a href="upload/<?php echo $pro['image'];?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="addtocart.php?id=<?php echo $pro['id'];?>"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="product_details.php?id=<?php echo $pro['id'];?>"><?php echo $pro['name'];?></a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">Rs. <?php echo $pro['price'];?></div>
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
<!-- Shop Section End -->
<?php
require "footer.php";
?>