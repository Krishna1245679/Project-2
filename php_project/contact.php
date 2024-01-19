<?php 
    require "header.php";
    
    ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

 <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <?php
                 if (isset($_POST['send'])){
                    include "config.php";
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    
                    
                    $q = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`, `date`, `time`) VALUES ('$name','$email','$subject','$message','','')";

                    $result = mysqli_query($con, $q);

                    if ($result > 0) {
                        echo"<div class='col-12 alert alert-info role='alert'>Your Message has been Sent!!</div>";
                    }else{
                        echo "No";
                    }

                 }
                 ?>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>Contact info</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker"></i> Address</h6>
                                    <p>B-33/17, MOH. Hakim Jafar Ali, Kapurthala,PIN CODE-144601</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> Phone</h6>
                                    <p><span>788-836-5162</span><span>987-287-3826</span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-headphones"></i> Support</h6>
                                    <p>tanvibhasin695@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <h5>SEND MESSAGE</h5>
                            <form action="" method="post">
                                <input type="text" name="name" placeholder="Name" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="text" name="subject" placeholder="Subject" required>
                                <textarea name="message" placeholder="Message" required></textarea>
                                
                                <button type="submit" name="send" value="send" class="site-btn">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1703.108485426129!2d75.37758045794862!3d31.38058038523083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a49ac49df800d%3A0x68187d70ca9d2d7d!2sMohalla%20Hakim%20Jafar%20Ali%2C%20Kapurthala%2C%20Punjab%20144602!5e0!3m2!1sen!2sin!4v1660651676380!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
<?php 
        include"footer.php";
    ?>