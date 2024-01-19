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
                    <span>Register</span>
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
                include "config.php";
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];
                $phone = $_POST['phone'];
                $id_proof = rand() . $_FILES['id_proof']['name'];
                $location = $_FILES['id_proof']['tmp_name'];
                $address_proof = rand() . $_FILES['address_proof']['name'];
                $location1 = $_FILES['address_proof']['tmp_name'];
                $q = "Insert into `user` (`name`, `email`, `password`, `dob`, `gender`, `phone`, `address_proof`, `id_proof`) values ('$name','$email','$password','$dob','$gender','$phone','$address_proof','$id_proof')";
                $result = mysqli_query($con, $q);
                if ($result > 0) {
                    move_uploaded_file($location, 'upload/' . $id_proof);
                    move_uploaded_file($location1, 'upload/' . $address_proof);
                    echo "<script>window.location.assign('login.php?msg=Registered Successfully');</script>";
                } else {
                    if (mysqli_errno($con) == 1062) {
                        echo "<div class='col-12 alert alert-danger'>Email Already Exist.</div>";
                    } else {
                        echo "<div class='col-12 alert alert-danger'>Error.</div>";
                    }
                }
            }
            ?>
        <div class="col-lg-6 mx-auto">
            <div class="row">
                <h2 class="text-center mx-auto">Register</h2></div>

                <form method="post" enctype="multipart/form-data" onsubmit="return validate()">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input  id="name" type="text" name="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input  id="email" type="text" name="email" class="form-control" placeholder="Enter your email">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input  id="password" type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">DOB</label>
                        <input  id="dob" type="date" name="dob" class="form-control" id="dob" value="<?php echo date('Y-m-d', strtotime('18 years ago')); ?>" max="<?php echo date('Y-m-d', strtotime('18 years ago')); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender" >
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Contact Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" title="Enter Valid Phone Number" >
                    </div>
                    <div class="mb-3">
                        <label for="id_proof">Upload ID Proof</label>
                        <input type="file" class="form-control" id="id_proof" name="id_proof" required >
                    </div>
                    <div class="mb-3">
                        <label for="address_proof">Upload Address Proof</label>
                        <input type="file" class="form-control" id="address_proof" name="address_proof" required >
                    </div>
                    <button type="submit" name="submit" value="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function validate(){
        var name = document.getElementById('name').value;
        var phone = document.getElementById('phone').value;
        var password = document.getElementById('password').value;        
        var email = document.getElementById('email').value;
        var dob = document.getElementById('dob').value;
        var gender = document.getElementById('gender').value;

         if(name == '' || email == '' || password == '' || gender == '' || dob == '' || phone == ''){
           alert('Please fill complete form.');
            return false;
        }

        var emaipatt = /^[a-zA-Z0-9\.\_\-]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3}$/;
        if(!emaipatt.test(email)){
            alert('Enter Valid Email');
            return false;
        }
        var regName = /^[A-Za-z]{2,}$/;
        if(!regName.test(name)){
            alert('Enter Valid name.');
            return false;
        }
        var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        if(!re.test(password)){
            alert('Your password must be of at least 8 characters, must contain a capital letter, a small letter, a number, a symbol and should not contain space');
            return false;
        } 
        

        var contactpatt = /^[6-9]{1}[0-9]{9}$/;
        if(!contactpatt.test(phone)){
            alert('Enter Valid Phone Number without code.');
            return false;
        }

    }
</script>
<?php
    include "footer.php";
?>