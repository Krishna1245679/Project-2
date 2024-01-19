<?php 
    include 'header.php';
    if(!isset($_SESSION['admin_name'])){
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
                        <span>View Contact</span>
                <h1 class="coupon__link"><b>VIEW CONTACT INFO</b></h1>
    
                    
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
                 if(isset($_GET['msg'])){
                        echo "<div class='col-12 alert alert-info'>".$_GET['msg']."</div>";
                    }
                ?>
                <div class="col-lg-12 order-1 order-lg-2" data-aos="fade-left" data-aos-delay=>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                                <!-- <th scope="col">Edit</th> -->
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "../config.php";
                                $q = "SELECT * FROM `contact`";
                                $result = mysqli_query($con,$q);
                                $i = 1;
                                foreach($result as $data){
                                ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $data['name'];?></td>
                                        <td><?php echo $data['email'];?></td>
                                        <td><?php echo $data['subject'];?></td>
                                        <td><?php echo $data['message'];?></td>
                                        <td><?php echo $data['createdat'];?></td>
                                        <!-- <td><a class="text-success font-weight-bold"><i class="fa-solid fa-pen-to-square"></i></a></td> -->
                                        <td><a href="delete_contact.php?id=<?php echo $data['id'];?>"  onclick="return confirm('Are you sure you want to delete this item?');" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
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