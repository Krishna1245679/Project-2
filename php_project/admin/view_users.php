<?php
include "header.php";
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
                        <span>View Users</span>
                    <h1 class="coupon__link"><b>VIEW USERS</b></h1>
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address Proof</th>
                            <th scope="col">ID Proof</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config.php";
                        $q = "SELECT * FROM `user` WHERE  1";
                        $result = mysqli_query($con, $q);
                        $i = 1;
                        foreach ($result as $data) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['dob']; ?></td>
                                <td><?php echo $data['gender']; ?></td>
                                <td><?php echo $data['phone']; ?></td>
                                <td><img class="img img-fluid" style="height:50px;" src="../upload/<?php echo $data['address_proof'];?>"></td>
                                <td><img class="img img-fluid" style="height:50px;" src="../upload/<?php echo $data['id_proof'];?>"></td>
                            </tr>
                        <?php
                            $i++;
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