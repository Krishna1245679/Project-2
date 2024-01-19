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
<div class="container">
    <div class="login-box">
        <div class="row">
            <?php
            if (isset($_GET['msg'])) {

                echo "<div class='col-12 alert alert-success'>" . $_GET['msg'] . "</div>";
            }
            if (isset($_POST['submit'])) {

                include "config.php";

                $email = $_POST['email'];
                $password = md5($_POST['password']);

                //echo $email.' '.$password;
                $q = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password' ";
                $result = mysqli_query($con, $q);

                if (mysqli_num_rows($result) > 0) {
                    //login
                    $data = mysqli_fetch_assoc($result);
                    $_SESSION['user_name'] = $data['name'];
                    $_SESSION['user_email'] = $data['email'];
                    $_SESSION['user_id'] = $data['id'];
                    $_SESSION['user_phone'] = $data['phone'];
                    echo "<script>window.location.assign('index.php');</script>";
                } else {
                    //invalid
                    echo "<div class='col-12 alert alert-danger'>Invalid Email/Password.</div>";
                }
            }
            ?>
            <div class="col-lg-6 mx-auto">
                <h2 class="text-center m-3">Login</h2>
                <form action="" method="post" onsubmit="return checkValue()">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter your Email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function checkValue(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        
        if(email == '' || password == ''){
            alert('Please Fill Form');
            return false;
        }

        var patt = /^[a-zA-Z0-9\.\_\-]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3}$/;
        if(!patt.test(email)){
            alert('Please fill valid email');
            return false;
        }
    }
</script>
<?php
require "admin/footer.php";
?>