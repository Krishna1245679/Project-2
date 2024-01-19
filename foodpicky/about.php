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
             .abouts{

                padding: 100px;
             }

         </style>

     
<body>
<div class="abouts">
<h1><center><b>ABOUT US</b></center></h1><br>
<p>FoodPicky is an online food order service. Foodpicky’s mission is to provide complete solution for ordering and delivering totally Veg food from the best restaurants to people in towns and cities. FoodPicky has so many restaurants around you to choose from, we are currently serving in cities of Chennai, Kanchipuram, Tiruchy, Salem, Madurai, Theni, Thiruvallur, Pondicherry, Thoothukudi, Kanyakumari and the list is going on… Not in a mood to go outside? Feeling Lazy? Or Busy schedule? FoodPicky has got your back. Now, ordering food is going to be way easier than you think. You will now be able to order your favourite dishes and snacks through a tap of finger. Waiting in queues for the order of your food or making pre-bookings at the restaurant of your choice, is no more the trend. Times have changed, so are the food services are. So, let’s be the part of online ordering in terms of your hunger part too.“Believing that food is pleasure and fun, ordering it should be easy and simple.” Following is the green recipe to place your order-Opening the app or just logging on to veg platter you will see the 3 options:<br><br>
	
	1. Location<br>
	2. Restaurant<br>
	3. Dish<br><br>
	
1. Choose location:Either manually choose your location or let GPS find your location automatically, to find restaurants available near you. OR You can also select the “Pickup” option.<br><br>

2. Now, you have two choices:(Choose the restaurant OR Choose the food)<br>
i) Choose your favourite restaurant, scroll on the restaurant’s dishes and add them to plate.<br>
ii) Type your choice of food in “Search by dish” area. And get a wide variety of restaurants to select your dish from.Select the restaurant and add select your choice of dish to the plate.<br><br>

3. Now, your plate is ready.<br><br>

4. Time to Check out! - Proceed your order with checkout step by filling in your contact details.<br><br>

5. Don’t miss the last step… ENJOYY…… the LUSCIOUS FOOD…The core purpose of FoodPicky is to save you some time and hard work of finding a veg restaurant and promote vegetarian food. Just enjoy the flavoursome veg dishes any time… anywhere… when your hunger alarm snoozes up…�� Currently, the Foodpicky supports cash on delivery orders only, but soon we will be getting you Online payment services and at many more regions… So, Stay tuned!<br>
</p>
</div>

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