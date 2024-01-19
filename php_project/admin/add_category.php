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
                        <span>Add Category</span>
                        <h1 class="coupon__link"><b>ADD CATEGORY</b></h1>
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
                 require ('../config.php');


                if (isset($_POST['submit'])) {

                    //print_r($_FILES);
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $image = rand().$_FILES['image']['name'];
                    $location = $_FILES['image']['tmp_name'];

                    move_uploaded_file($location,"../upload/" . $image);

                    //$_FILES ->>> Used for multimedia files like image, audio, video, pdf, doc, etc
                    $q = "Insert into `category` (`name`,`image`,`description`) values ('$name','$image','$description')";
                    $result = mysqli_query($con, $q);
                    if ($result > 0) {
                       
                        //used to save image from temporary folder to our project folder
                        echo "<div class='col-12 alert alert-warning alert-dismissible fade show role='alert'>Category Inserted!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                        //echo "<script>window.location.assign('form.php?msg');</script>";
                    } else {
                        echo "No";
                        //echo mysqli_error($conn);
                        //echo "<script>window.location.assign('form.php?err');</script>";
                    }
                }
                ?>
                

 <form method="post" enctype="multipart/form-data" class=" col-lg-12 mx-auto">
    <div class="form-group">
    <label for="exampleNameI">Name</label>
    <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
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