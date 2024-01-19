<?php
    include "../config.php";
    $id = $_GET['id'];
    $q = "delete from `subcategory` where id ='$id'";
    $result = mysqli_query($con,$q);
    if($result > 0){
        echo "<script>window.location.assign('view_subcategory.php?msg=Record Deleted.');</script>";
    }else{
        echo "<script>window.location.assign('view_subcategory.php?msg=Try Again.');</script>";
    }
?>
