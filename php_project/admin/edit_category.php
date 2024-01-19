<?php 

    require "header.php";
    if(!isset($_SESSION['admin_name'])){
        
      echo "<script>window.location.assign('login.php');</script>";
    }
    ?>
    
    <?php
        $id = $_GET['id'];
        include "../config.php";
        
        $q = "SELECT * FROM `category` WHERE id = '$id' ";
        $result = mysqli_query($con, $q);
        $data = mysqli_fetch_assoc($result);
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];

            //To Check if file is uploaded by User
            if ($_FILES['image'] ['error'] > 0) {
                //user has not uploaded file
                $image = $data['image'];
            } else{
                //user has uploaded a file
                $image = rand() . $_FILES['image']['name'];
                $location = $_FILES['image']['tmp_name'];
                move_uploaded_file($location, '../upload/' . $image);

            }
            $q = "update `category` set `name`='$name',`description`='$description',`image`='$image' where `id`='$id'";
    $result = mysqli_query($con,$q);
    if($result > 0){
        echo "<script>window.location.assign('view_category.php?msg=Record Updated.');</script>";
    }else{
        echo "<script>window.location.assign('view_category.php?msg=Try Again.');</script>";
    }

 }
    ?>


     <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Edit Category</span>

                <h1 class="coupon__link"><b>EDIT CATEGORY</b></h1>
    
                    
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
                
<form method="post" enctype="multipart/form-data" class=" col-lg-12 mx-auto">
    <div class="form-group">
    <label for="exampleNameI">Name</label>
    <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="<?php echo $data['name']; ?>">
</div>
<div class="form-group">
    <label for="exampleDescription1">Description</label>
    <textarea required class="form-control" name="description" id="exampleDescription1" placeholder="Enter Description"><?php echo $data['description']; ?></textarea>
  </div>
  <div class="form-group">
    <label for="formFile">Image</label>
    <input type="file" name="image" class="form-control" id="formFile" placeholder="Image"> <img class="img img-fluid" style="height: 50px;" src="../upload/<?php echo $data['image']; ?>">
  </div>
  <button type="submit" name="submit" class="col-12 mx-0 btn btn-primary">Submit</button>
</form>
</div>
</div>
</section>
<?php 
    require "footer.php";
?>