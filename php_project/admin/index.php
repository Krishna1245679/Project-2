<?php
    require "header.php";
    if(!isset($_SESSION['admin_name'])){
        
      echo "<script>window.location.assign('login.php');</script>";
    }
?>

<!-- Dashboard Section Begin -->

<div class="container-fluid col-12">
<div class="card bg-info mt-3">
  <div class="card-body text-center">
   <h2><b> Welcome <?php echo $_SESSION['admin_name']; ?></b></h2>
  </div>
</div>
</div>
        <div class="container px-0 mt-3">
            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Total Categories
                            <?php 
                                include "../config.php";
                                $category_query = "SELECT * FROM category";
                                $run = mysqli_query($con, $category_query);

                                if($category_total = mysqli_num_rows($run))
                                {
                                    echo '<h4 class="mb-0"> '.$category_total.'</h4>';
                                }
                                else{
                                    echo '<h4 class="mb-0">No Data Available</h4>';
                                }

                            ?>
                            
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="view_category.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Total Subcategories
                            <?php 
                                include "../config.php";
                                $subcategory_query = "SELECT * FROM subcategory";
                                $run = mysqli_query($con, $subcategory_query);

                                if($subcategory_total = mysqli_num_rows($run))
                                {
                                    echo '<h4 class="mb-0"> '.$subcategory_total.'</h4>';
                                }
                                else{
                                    echo '<h4 class="mb-0">No Data Available</h4>';
                                }

                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="view_subcategory.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Total Products
                        <?php 
                                include "../config.php";
                                $product_query = "SELECT * FROM product";
                                $run = mysqli_query($con, $product_query);

                                if($product_total = mysqli_num_rows($run))
                                {
                                    echo '<h4 class="mb-0"> '.$product_total.'</h4>';
                                }
                                else{
                                    echo '<h4 class="mb-0">No Data Available</h4>';
                                }

                            ?>
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="view_products.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>



                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Total Orders
                        <?php 
                                include "../config.php";
                                $order_query = "SELECT * FROM orders";
                                $run = mysqli_query($con, $order_query);

                                if($order_total = mysqli_num_rows($run))
                                {
                                    echo '<h4 class="mb-0"> '.$order_total.'</h4>';
                                }
                                else{
                                    echo '<h4 class="mb-0">No Data Available</h4>';
                                }

                            ?>
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="view_order.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">Total Users
                        <?php 
                                include "../config.php";
                                $user_query = "SELECT * FROM user";
                                $run = mysqli_query($con, $user_query);

                                if($user_total = mysqli_num_rows($run))
                                {
                                    echo '<h4 class="mb-0"> '.$user_total.'</h4>';
                                }
                                else{
                                    echo '<h4 class="mb-0">No Data Available</h4>';
                                }

                            ?>
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="view_users.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body">Total Contact Messages
                        <?php 
                                include "../config.php";
                                $contact_query = "SELECT * FROM contact";
                                $run = mysqli_query($con, $contact_query);

                                if($contact_total = mysqli_num_rows($run))
                                {
                                    echo '<h4 class="mb-0"> '.$contact_total.'</h4>';
                                }
                                else{
                                    echo '<h4 class="mb-0">No Data Available</h4>';
                                }

                            ?>
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="view_contact.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                
                </div>
            </div>

<!-- Dashboard Section End -->

<?php 
    require "footer.php";
?>