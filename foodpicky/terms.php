<!DOCTYPE html>
<html lang="en">

<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
     
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
               <div class="container">
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                  <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            
                            <?php
                        if(empty($_SESSION["user_id"]))
                            {
                                echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                              <li class="nav-item"><a href="registration.php" class="nav-link active">Sign Up</a> </li>';
                            }
                        else
                            {
                                    
                                    
                                        echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                                    echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                            }

                        ?>
                             
                        </ul>
                  </div>
               </div>
            </nav>
            <!-- navbar -->
         </header>

         <style type="text/css">
             .term{
                padding: 80px;
             }


         </style>

         <body>
         
            <section class= "term">
               <div>
                     
                            <p><h2><center><b>TERMS AND CONDITIONS:</center><b></p></h2>
                              
                             <b> <p>These terms must be accepted by you when you use Foodpicky website or Application:<br><br>

1) You must not accept these terms if:<br>

You are not lawfully entitled to use Foodpicky website in the country in which you are located or reside

If you are not of legal age to bind agreement with us<br><br>

2) If any change made to Terms & Conditions:<br>

Foodpicky team can modify Terms & conditions at any time, in sole discretion. If Foodpicky team will be modifying any content, team will let you know either by site or through app. It's a major factor that you do agree to modified Terms & conditions. If you don't agree to be bound by the modified Terms, then you can't use the services any more. Over Services are evolving over time we can change or close any services at any time without any notice, at our sole discretion.<br><br>

3) Privacy :<br>

Your privacy is very important to us. We will assure you that your any private data will not be disclosed anywhere at any cost. If you have any questions or concerns about terms and conditions, please contact us at support@foodpicky.com<br><br>


NOTE: In case of any illegal activities from user, we can block their account permanently.<br>

Refund Policy:<br><br>

1) For Restaurant Owner:<br>

IN case of payment did by mistake or in case of any payment related issues from Google Play Store or App Store, we are not entitled to refund any amount. If it’s very crucial and any genuine problem is seen in our system than we can look into it and resolve the issue or issue refund.<br><br>

2) For Customer of Restaurant:<br>

IN case of payment did by mistake or in case of any payment related issues for food ordered with Foodchow, we are not entitled to refund any amount. Restaurant Owner will be responsible for issue refund to customer for placed order in any case.<br><br>

Order Approval:<br>

FoodPicky is not responsible for any kind of order cancelation or approval. Delivery time, Taxes, Delivery Charges and Delivery times are decided by the restaurant owner. Restaurant owners are only responsible for any kind of updates and changes of extra charges. FoodPicky is not taking any kind of taxes or extra charges from the customers.<br><br>

Communication Problems between Customer and Restaurant:<br>

In case of misbehaviour, miscommunication or any illegal activities done by customer and restaurant registered here, we will not be responsible for any such activities as we are not taking any proof of their identity.<br><br>

Blocking or Deleting your Account<br>

If we notice any illegal activity then we have all rights to permanently Block your account without any notice and reasons.</p>
</b>

                           </div>
                           <!-- end: Widget -->
               </div>
            </section>
                    
                    <!-- start: FOOTER -->
        <footer class="footer">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img src="images/food-picky-logo.png" alt="Footer logo"> </a> <span>Choose it &amp; Enjoy your meals! </span> </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Join us Today</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>How it Works?</h5>
                        <ul>
                            <li><a href="#">Enter your location</a></li>
                            <li><a href="#">Choose the restaurant</a></li>
                            <li><a href="#">Choose your dishes</a></li>
                            <li><a href="#">Get delivered</a></li>
                            <li><a href="#">Pay on delivery</a></li>
                            <li><a href="#">Enjoy your meals :)</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5>Legal</h5>
                        <ul>
                            <li><a href="terms.php">Terms & Conditions</a> </li>
                            <li><a href="privacy.php">Privacy Policy</a> </li>
                            
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Locations We Deliver To</h5>
                        <ul>
                            <li><a href="#">Chennai</a> </li>
                            <li><a href="#">Kanchipuram</a> </li>
                            <li><a href="#">Tiruchy</a> </li>
                            <li><a href="#">Salem</a> </li>
                            <li><a href="#">Madurai</a> </li>
                            <li><a href="#">Theni</a> </li>
                            <li><a href="#">Thiruvallur</a> </li>
                            <li><a href="#">Pondicherry</a> </li>
                            <li><a href="#">Thoothukudi</a> </li>
                            <li><a href="#">Kanyakumari</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- top footer ends -->
        </footer>
        <!-- end:Footer -->
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>