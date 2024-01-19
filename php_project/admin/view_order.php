<?php
require "header.php";
if (!isset($_SESSION['admin_name'])) {
    echo "<script>window.location.assign('login.php');</script>";
}
?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>View Orders</span>
                    <h1 class="coupon__link"><b>VIEW ORDERS</b></h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Checkout Section Begin -->
<section>
    <div class="container-fluid">
        <div class="row">

            <?php
            if (isset($_GET['msg'])) {
                echo "<div class='col-12 alert alert-info'>" . $_GET['msg'] . "</div>";
            }
            ?>
            <div class="col-lg-12 order-1 order-lg-2 table-responsive" data-aos="fade-left" data-aos-delay="100">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User</th>
                            <th scope="col">Products</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Pincode</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Shipping</th>
                            <th scope="col">Total</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config.php";
                        $selectquery = "Select orders.*,user.name from `orders` join `user` on orders.user_id=user.id";
                        $res = mysqli_query($con, $selectquery);
                        foreach ($res as $data) {
                        ?>
                            <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td>
                                    <table class="table">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                        </tr>
                                        <?php
                                        $q = "select order_detail.*,product.name from order_detail join product on order_detail.product_id=product.id where order_detail.order_id = '" . $data['id'] . "'";
                                        $exe = mysqli_query($con, $q);
                                        foreach ($exe as $pro) {
                                        ?>
                                            <tr>
                                                <td><?php echo $pro['name']; ?></td>
                                                <td><?php echo $pro['price']; ?></td>
                                                <td><?php echo $pro['quantity']; ?></td>
                                                <td><?php echo $pro['total_price']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </td>
                                <td><?php echo $data['address']; ?></td>
                                <td><?php echo $data['phone']; ?></td>
                                <td><?php echo $data['pincode']; ?></td>
                                <td>Rs. <?php echo $data['subtotal']; ?></td>
                                <td>Rs. <?php echo $data['shipping']; ?></td>
                                <td>Rs. <?php echo $data['total']; ?></td>
                                <td><?php echo $data['message']; ?></td>
                                <td><?php echo $data['status']; ?></td>
                                <td><?php echo $data['createdat']; ?></td>
                                <td><a href="edit_order.php?id=<?php echo $data["id"]; ?>"><i class="fa fa-edit fa-2x text-success"></i></a></td>
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