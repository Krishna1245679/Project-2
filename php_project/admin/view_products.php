<?php
require "header.php";
if (!isset($_SESSION['admin_name'])) {

    echo "<script>window.location.assign('login.php');</script>";
}
?>
<?php
include '../config.php';
$q = "SELECT category.name as cattitle, subcategory.name as subcattitle, product.* from category JOIN subcategory ON category.id=subcategory.category_id JOIN product ON subcategory.id=product.subcategory_id ";
$result = mysqli_query($con, $q);
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>View Product</span>
                    <h1 class="coupon__link"><b>VIEW PRODUCTS</b></h1>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Section Begin -->
<section>
    <div class="container">
        <div class="row">

            <?php
            if (isset($_GET['msg'])) {
                echo "<div class='col-12 alert alert-info'>" . $_GET['msg'] . "</div>";
            }
            ?>
            <div class="col-lg-12 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Subcategory Name</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        while ($rows = mysqli_fetch_assoc($result)) {

                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $rows['cattitle']; ?></td>
                                <td><?php echo $rows['subcattitle']; ?></td>
                                <td><?php echo $rows['name']; ?></td>
                                <td><?php echo $rows['description']; ?></td>
                                <td>Rs. <?php echo $rows['price']; ?></td>
                                <td><img class="img img-fluid" style="height:50px;" src="../upload/<?php echo $rows['image'];?>"></td>
                                <td><a href="edit_products.php?id=<?php echo $rows['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td><a class="text-danger" href="delete_products.php?id=<?php echo $rows['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
<?php
require "footer.php";
?>