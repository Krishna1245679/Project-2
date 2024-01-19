<?php

include 'header.php';
 include 'config.php';
 ?>
                <?php 
                    if(isset($_POST['submit'])) {
                        include 'config.php';
                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $sql = "SELECT * FROM user where email = '$email' ";
                        $result = mysqli_query($con, $sql);
                        if($result > 0) {
                            echo "<script>window.location.assign('newsletter.php');</script>";
                        }else{
                            echo "Error";
                        }
                    }
                    ?>

<div class="container-fluid">
	<div class="row">
		
		<div class="card bg-success text-center mx-auto mt-5 mb-5 col-md-12">
  
  <div class="card-body">
    <h1 class="card-title mb-5 mt-5 "><b>Thanks For Subscribing Us!!!</b></h1>
    
    <a href="index.php" class="btn btn-info mt-2 mb-3 mx-auto col-md-3">Continue Shopping</a>
  </div>
  
</div>

		</div>
	</div>
	<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/db0f5f00b6.js" crossorigin="anonymous"></script>
</body>

</html>