<?php 

	require "header.php";
    if(!isset($_SESSION['admin_name'])){
        
      echo "<script>window.location.assign('login.php');</script>";
    }
    
?>
<?php
$sid = $_GET['id']; 
include "../config.php";

$sql = "SELECT * FROM product WHERE id ='$sid'";
$res = mysqli_query($con,$sql);
$datas = mysqli_fetch_array($res);


if(isset($_POST['submit'])){
    

    $category_id = $_POST['category_id'];
    $subcategory_id = $_POST['subcategory_id'];
    $pname = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    //To Check if file is uploaded by User
    if ($_FILES['image']['error'] > 0) {
        //user has not uploaded file
        $image = $datas['image'];
    } else {
        //user has uploaded a file
        $image = rand().$_FILES['image']['name'];
        $location = $_FILES['image']['tmp_name'];
        move_uploaded_file($location, '../upload/' . $image);
    }


    $s ="UPDATE `product` SET `name`='$pname',`category_id`='$category_id',`subcategory_id`='$subcategory_id',`description`='$description',`price`='$price', `image`='$image' WHERE id = '$sid'  ";
    $edit = mysqli_query($con, $s);

    if( $edit > 0){
        echo "<script>window.location.assign('view_products.php?msg=Record Updated.');</script>";
    }else{
        echo "<script>window.location.assign('view_products.php?msg=Try Again.');</script>";
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
                        <span>Edit Product</span>

                <h1 class="coupon__link"><b>EDIT PRODUCTS</b></h1>
    
                    
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
        <div class="form-group">
            <label for="exampleNameI">Category Name</label>
            <select required class="form-control" name="category_id" onchange="changeValue()" id="category_id">
                                <?php
                                    $q = "select * from `category`";
                                    $result = mysqli_query($con,$q);
                                    foreach($result as $fetch){
                                        ?>
                                        <option value="<?php echo $fetch['id'];?>"<?php if($fetch['id']== $datas['category_id']){echo "selected";} ?>> <?php echo $fetch['name'];?></option>
                                        <?php
                                    }
                                ?>
                                
                            </select>
                        </div>

<div class="form-group" >
    <label for="exampleNameI">Subcategory Name</label>
    <select required class="form-control" name="subcategory_id" id="subcategory_id">
        <?php
            $query = "SELECT * FROM subcategory WHERE category_id='".$datas['category_id']."'";
            $r = mysqli_query($con, $query);
            foreach($r as $temp){
                ?>
                <option value="<?php echo $temp['id']; ?>"<?php if ($temp['id']== $datas['subcategory_id']){echo "selected";} ?>> <?php echo $temp['name'];?></option>
                                        <?php
                                    }
                                ?>
    </select>
</div>

    <div class="form-group">
    <label for="exampleNameI">Product Name</label>
    <input required type="text" name="name" class="form-control" placeholder="Enter Product Name" value="<?php echo $datas['name']?>">
    </div>


<div class="form-group">
    <label for="exampleDescription1">Description</label>
    <textarea required class="form-control" name="description" id="exampleDescription1" placeholder="Enter Description"><?php echo $datas['description']?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleNameI">Price</label>
    <input required type="number" name="price" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Enter price" value ="<?php echo $datas['price']?>" >
</div>
<div class="form-group">
                    <label for="formFile">Image</label>
                    <input type="file" name="image" class="form-control" id="formFile" placeholder="Image"> <img class="img img-fluid" style="height: 50px;" src="../upload/<?php echo $datas['image']; ?>">
                </div>
  <button type="submit" name="submit" class=" col-12 mx-0 btn btn-primary">Submit</button>
</form>
</div>
</div>  
</section>
<script>
    function changeValue(){
        var data = document.getElementById('category_id').value;
        //ajax code
        var obj;
        var url="productajax.php?cat=" + data;
        // alert(url);
        if(window.XMLHttpRequest)
        {
            obj=new XMLHttpRequest();
        }
        else
        {
            obj= new ActiveXObject("Microsoft.XMLHTTP");
        }
        //send request
        obj.open("GET",url,true);
        obj.send();
        obj.onreadystatechange=function()
        {
            if(obj.readyState == 4 && obj.status==200)
            {
                var res=obj.responseText;
                // alert(res);
                document.getElementById("subcategory_id").innerHTML = res;
            }
        };
    }
</script>

<?php 
    require "footer.php";
?>
