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
                        <span>Add Subcategory</span>
                <h1 class="coupon__link"><b>ADD SUBCATEGORY</b></h1>
    
                    
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
                    include '../config.php';
                    if(isset($_POST['submit'])){                        
                        $name = $_POST['name'];
                        $category_id = $_POST['category_id'];
                        $description = $_POST['description'];
                    $image = rand().$_FILES['image']['name'];
                    $location = $_FILES['image']['tmp_name'];

                    move_uploaded_file($location,"../upload/". $image);
                        $q = "INSERT INTO `subcategory`(`id`, `name`, `category_id`, `description`, `image`) VALUES  ('', '$name','$category_id', '$description', '$image')";
                        $result = mysqli_query($con,$q);
                        if($result > 0){
                            echo "<div class='col-12 alert alert-info alert-dismissible fade show role='alert'>Inserted!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                        }else{
                            echo "NO";
                        }
                    }
                ?>
                <form method="post" enctype="multipart/form-data" class=" col-lg-12 mx-auto">
    <div class="form-group">
    <label for="exampleNameI">Name</label>
    <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
</div>
<div class="form-group">
    <label>Category</label>
    <select class="form-control" name="category_id">
                                <?php
                                    $q = "select * from `category`";
                                    $result = mysqli_query($con,$q);
                                    foreach($result as $data){
                                        ?>
                                        <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>

<div class="form-group">
    <label for="exampleDescription1">Description</label>
    <textarea required class="form-control" name="description" id="exampleDescription1" placeholder="Enter Description"></textarea>
  </div>
  <div class="form-group">
    <label for="formFile">Image</label>
    <input required type="file" name="image" class="form-control" id="formFile" placeholder="Image">
  </div>
  <button type="submit" name="submit" class=" col-12 mx-0 btn btn-primary">Submit</button>
</form>
</div>
</div>
</section>
<?php 
    require "footer.php";
?>