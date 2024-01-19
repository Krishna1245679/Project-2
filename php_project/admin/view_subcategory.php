<?php 
	require "header.php";
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
                        <span>View Subcategory</span>
                <h1 class="coupon__link"><b>VIEW SUBCATEGORY</b></h1>
    
                    
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
                <div class="col-lg-12 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">SubCategory Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
                                include "../config.php";
                                $q = "SELECT category.name as category_name,subcategory.* FROM category JOIN subcategory ON subcategory.category_id = category.id";
                                $result = mysqli_query($con,$q);
                                $i = 1;
                                foreach($result as $data){
                                ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $data['category_name'];?></td>
                                        <td><?php echo $data['name'];?></td>
                                        <td><?php echo $data['description'];?></td>
                                        <td><img class="img img-fluid" style="height:50px;" src="../upload/<?php echo $data['image'];?>"></td>
                                        <td><a href="edit_subcategory.php?id=<?php echo $data['id'];?>" ><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><a class="text-danger" href="delete_subcategory.php?id=<?php echo $data['id'];?>"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa-solid fa-trash"></i></a></td>
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
