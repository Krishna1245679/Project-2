<?php
require "header.php";
require "config.php";
if (!isset($_SESSION['user_name'])) {
    echo "<script>window.location.assign('login.php');</script>";
}
if(isset($_POST['submit'])){
	$user_id = $_SESSION['user_id'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$pincode = $_POST['pincode'];
	$message = $_POST['message'];
	$subtotal = $_POST['subtotal'];
	$total = $_POST['total'];
	$q = "insert into `orders` (`user_id`, `address`, `phone`, `pincode`, `subtotal`, `shipping`, `total`, `message`) values ('$user_id','$address','$phone','$pincode','$subtotal','50','$total','$message')";
	$result = mysqli_query($con,$q);
	if($result > 0){
		$last_id = mysqli_insert_id($con);
		foreach ($_SESSION['cart'] as $key => $value) {
			$s = "select * from product where id='$key'";
			$select = mysqli_query($con,$s);
			$product = mysqli_fetch_assoc($select);
			$price = $product['price'];
			$qtyTotal = $price*$value;
			$o = "INSERT INTO `order_detail`(`product_id`, `order_id`, `quantity`, `price`, `total_price`) VALUES ('$key','$last_id','$value','$price','$qtyTotal')";
			$res = mysqli_query($con,$o);
		}
		unset($_SESSION['cart']);
		echo "<script>window.location.assign('myorders.php')</script>";
	}else{
		echo "<script>window.location.assign('cart.php?msg=Try Again')</script>";
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
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $t = 0;
                            $subtotal = 0;
                            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                foreach ($_SESSION['cart'] as $id => $quantity) {
                                    $t++;
                                    //$obj = mysqli_connect("localhost","root","","wedding");
                                    $que = "select * from `product` where `id`='$id'";
                                    $res  = mysqli_query($con, $que);
                                    if ($data = mysqli_fetch_array($res)) {
                            ?>
                                        <tr>
                                            <td class="cart__product__item">
                                                <img style="width: 90px; heigth:90px;" src="upload/<?php echo $data['image']; ?>" alt="">
                                                <div class="cart__product__item__title">
                                                    <h6><?php echo $data['name']; ?></h6>
                                                </div>
                                            </td>
                                            <td class="cart__price">Rs. <?php echo $data['price']; ?></td>
                                            <td class="cart__quantity">
                                                <input style="width:60%;" class="form-control" type="number" value="<?php echo $quantity; ?>" name="quantity" min="1" onchange="increaseQty(this.value,<?php echo $data['id']; ?>)">
                                            </td>
                                            <td class="cart__total"><?php $subtotal += ($data['price'] * $quantity);
                                                                    echo ('Rs. ' . $data['price'] * $quantity) . "<br/>"; 
                                                                    $total = $subtotal + '50';?></td>
                                            <td class="cart__close"><a href='removeit.php?x=<?php echo $id; ?>'><span class="icon_close"></span></a></td>
                                        </tr>
                                <?php
                                        $_SESSION["total"] = $subtotal;
                                    }
                                }
                            } else {
                                ?>
                                <tr class="table-body-row">
                                    <td class="cart__product__item" colspan="5">No Product In Cart.</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        ?>

            <form method="post" class="checkout__form row">
                <div class="col-lg-6">
                    <h5>Billing detail</h5>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Name <span>*</span></p>
                                <input readonly value="<?php echo $_SESSION['user_name']; ?>" type="text" placeholder="Name">
                                <input value="<?php echo $subtotal; ?>" name="subtotal" type="hidden">
                                <input value="<?php echo $total; ?>" name="total" type="hidden">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Email <span>*</span></p>
                                <input readonly value="<?php echo $_SESSION['user_email']; ?>" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Address <span>*</span></p>
                                <textarea required name="address" id="address" cols="30" rows="10" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Postcode/Zip <span>*</span></p>
                                <input type="number" placeholder="Pincode" name="pincode" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Phone <span>*</span></p>
                                <input type="number" placeholder="Phone" value="<?php echo $_SESSION['user_phone']; ?>" required name="phone">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Say Something </p>
                                <textarea  name="message" id="message" cols="30" rows="10" placeholder="Say Something"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>Rs. <?php echo $subtotal; ?></span></li>
                            <li>Shipping <span>Rs. 50</span></li>
                            <li>Total <span>Rs. <?php echo $total; ?></span></li>
                        </ul>
                        <button type="submit" name="submit" class="primary-btn border-0 w-100">Proceed to checkout</button>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</section>
<!-- Shop Cart Section End -->
<script>
    function increaseQty(val, id) {
        window.location.assign('increase.php?id=' + id + '&qty=' + val);
    }
</script>
<?php
require "footer.php";
?>