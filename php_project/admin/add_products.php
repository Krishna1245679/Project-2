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
                        <span>Add Product</span>
                    <h1 class="coupon__link"><b>ADD PRODUCTS</b></h1>


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
            if (isset($_POST['submit'])) {

                $category_id = $_POST['category_id'];
                $subcategory_id = $_POST['subcategory_id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];

                $image = rand().$_FILES['image']['name'];
                $location = $_FILES['image']['tmp_name'];

                move_uploaded_file($location, "../upload/" . $image);
                $query = "INSERT INTO `product`(`id`, `name`, `category_id`, `subcategory_id`, `description`, `price`,`image`) VALUES ('','$name','$category_id','$subcategory_id','$description','$price','$image')";
                $res = mysqli_query($con, $query);
                if ($res > 0) {
                    echo "<div class='col-12 alert alert-warning alert-dismissible fade show role='alert'>Product Added Successfully!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                } else {
                    echo "Try Again";
                    //echo mysqli_error($conn);

                }
            }
            ?>


            <form method="post" class=" col-lg-12 mx-auto" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleNameI">Category Name</label>
                    <select class="form-control" name="category_id" onchange="changeValue()" id="category_id" required>
                        <option value="" selected disabled>Select Category</option>
                        <?php
                        $q = "select * from `category`";
                        $result = mysqli_query($con, $q);
                        foreach ($result as $fetch) {
                        ?>
                            <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['name']; ?></option>
                        <?php
                        }
                        ?>


                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleNameI">Subcategory Name</label>
                    <select class="form-control" name="subcategory_id" id="subcategory_id" required>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleNameI">Product Name</label>
                    <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Category Name" required>
                </div>


                <div class="form-group">
                    <label for="exampleDescription1">Description</label>
                    <textarea class="form-control" name="description" id="exampleDescription1" placeholder="Enter Description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleNameI">Price</label>
                    <input type="number" name="price" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Enter price" required>
                </div>
                <div class="form-group">
                    <label for="exampleNameI">Image</label>
                    <input type="file" name="image" class="form-control" id="image" required>
                </div>
                <button type="submit" name="submit" class=" col-12 mx-0 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

<script>
    function changeValue() {
        var data = document.getElementById('category_id').value;
        //ajax code
        var obj;
        var url = "productajax.php?cat=" + data;
        // alert(url);
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        }
        //send request
        obj.open("GET", url, true);
        obj.send();
        obj.onreadystatechange = function() {
            if (obj.readyState == 4 && obj.status == 200) {
                var res = obj.responseText;
                // alert(res);
                document.getElementById("subcategory_id").innerHTML = res;
            }
        };
    }
</script>

<?php
require "footer.php";
?>