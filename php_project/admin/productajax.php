<?php
    $id1 = $_GET['cat'];
    include "../config.php";
    $q = "select * from subcategory where `category_id`='$id1'";
    $result = mysqli_query($con,$q);
    foreach($result as $data){
        //echo "<option value='".$data['id']."'>".$data['name']."</option>";
        ?>
        <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
        <?php
    }
?>
