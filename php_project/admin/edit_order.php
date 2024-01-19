<?php

require "header.php";
if (!isset($_SESSION['admin_name'])) {

    echo "<script>window.location.assign('login.php');</script>";
}

?>
<?php
include "../config.php";
$id = $_GET['id'];
$query = "select * from `product` where id='$id'";
$res = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($res);
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">

                    <h1 class="coupon__link"><b>EDIT ORDER</b></h1>


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

            <form method="post" class=" col-lg-12 mx-auto" enctype="multipart/form-data">
                <?php
                if (isset($_POST['submit'])) {
                    $status = $_POST['status'];
                    $q = "Update `orders` set `status`='$status' where `id` = '$id'";
                    $result = mysqli_query($con, $q);
                    if ($result > 0) {
                        echo "<script>window.location.assign('view_order.php?msg=Record Updated')</script>";
                    } else {
                        echo "<script>window.location.assign('view_order.php?msg=Try Again')</script>";
                    }
                }
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $q = "Select * from  `orders` where `id` = '$id'";
                    $result = mysqli_query($con, $q);
                    $data = mysqli_fetch_assoc($result);
                } else {
                    echo "<script>window.location.assign('view_order.php')</script>";
                }
                ?>
                <div class="form-group">
                    <label for="name">Order ID</label>
                    <input type="text" class="form-control" id="name" readonly value="<?php echo $data['id']; ?>">
                </div>
                <div class="form-group">
                    <label for="name">Status</label>
                    <select name="status" class="form-control" required>
                        <option selected disabled value="">Select Status</option>
                        <option>CONFIRMED</option>
                        <option>OUT FOR DELIVERY</option>
                        <option>DELIVERED</option>
                        <option>CANCELLED</option>
                    </select>
                </div>
                <button type="submit" name="submit" class=" col-12 mx-0 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php
require "footer.php";
?>