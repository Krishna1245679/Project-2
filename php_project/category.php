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
                    <span>Category</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Blog Details Section Begin -->
<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <?php
            include "config.php";
            $q = "select * from category";
            $res = mysqli_query($con, $q);
            foreach ($res as $data) {
            ?>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="upload/<?php echo $data['image'];?>" style=" background-size:90% 76%;"></div>
                        <div class=" ml-4 blog__item__text">
                            <h6><a href="subcategory.php?id=<?php echo $data['id'];?>"><?php echo $data['name'];?></a></h6>
                            <p><?php echo $data['description'];?></p>
                            <ul>
                                <li><a href="subcategory.php?id=<?php echo $data['id'];?>">View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- Blog Section End -->
<?php
require "footer.php";
?>