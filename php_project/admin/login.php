<?php
require "header.php";
?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <?php
            if (isset($_GET['err'])) {

                echo "<div class='col-12 alert alert-danger'>Please Login First.</div>";
            }
            if (isset($_POST['submit'])) {

                include "../config.php";

                $email = $_POST['email'];
                $password = md5($_POST['password']);

                //echo $email.' '.$password;
                $q = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password' ";
                $result = mysqli_query($con, $q);

                if (mysqli_num_rows($result) > 0) {
                    //login
                    $data = mysqli_fetch_assoc($result);
                    $_SESSION['admin_name'] = $data['name'];
                    $_SESSION['admin_email'] = $data['email'];
                    $_SESSION['admin_id'] = $data['id'];
                    echo "<script>window.location.assign('index.php');</script>";
                } else {
                    //invalid
                    echo "<div class='col-12 alert alert-danger'>Invalid Email/Password.</div>";
                }
            }
            ?>
            <div class="col-lg-6 mx-auto">
                <h2 class="text-center mt-3">Login</h2>

                <form method="post" class="mx-auto mb-5" onsubmit="return checkValue()">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" class="form-control" id="password" placeholder="Enter your password">

                    </div>
                    <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="Remember me">
    <label class="form-check-label" for="Remember me">Remember me</label>
  </div> -->
                    <button type="submit" name="submit" value="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
<script>
    function checkValue() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        //alert(email+' '+password);
        // if(email == ''){
        //     alert('Please Fill Email');
        //     return false;
        // }
        // if(password == ''){
        //     alert('Please Fill Password');
        //     return false;
        // }
        if (email == '' || password == '') {
            alert('Please Fill Form');
            return false;
        }
        var patt = /^[a-zA-Z0-9\.\_\-]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3}$/;
        if (!patt.test(email)) {
            alert('Please fill valid email');
            return false;
        }

    }
</script>
<?php
require "footer.php";
?>