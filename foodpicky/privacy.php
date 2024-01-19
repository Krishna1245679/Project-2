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
             .pri{
                padding: 100px;
             }

         </style>
<body>
        <div class="pri">
            <h2><center><b>PRIVACY POLICY</b></center></h2><br>
            <p>This privacy policy has been compiled to better serve those who are concerned with how their ‘Personally Identifiable Information’ (PII) is being used online. PII, as described in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.
 

<br>What personal information do we collect from the people that visit our blog, website or app?
 <br>

When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, phone number or other details to help you with your experience.
 <br>

When do we collect information?
 
<br>
We collect information from you when you register on our site, place an order, subscribe to a newsletter, respond to a survey, fill out a form, Use Live Chat, Open a Support Ticket or enter information on our site.
Provide us with feedback on our products or services 

<br>
How do we use your information?
 <br>

We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:

<br>
      • To personalize your experience and to allow us to deliver the type of content and product offerings in which you are most interested.
      • To improve our website in order to better serve you.
      • To allow us to better service you in responding to your customer service requests.
      • To administer a contest, promotion, survey or other site feature.
      • To quickly process your transactions.
      • To ask for ratings and reviews of services or products
      • To follow up with them after correspondence (live chat, email or phone inquiries)
 
<br>

How do we protect your information?
 
<br>
Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible.
<br>
We use regular Malware Scanning.
<br>

Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.
 
<br>
We implement a variety of security measures when a user places an order enters, submits, or accesses their information to maintain the safety of your personal information.
 
<br>
All transactions are processed through a gateway provider and are not stored or processed on our servers.
 
<br>
Do we use ‘cookies’?
 
<br>
Yes. Cookies are small files that a site or its service provider transfers to your computer’s hard drive through your Web browser (if you allow) that enables the site’s or service provider’s systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.
We use cookies to:<br>
      • Help remember and process the items in the shopping cart.
      • Understand and save user’s preferences for future visits.
      • Keep track of advertisements.
      • Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We may also use trusted third-party services that track this information on our behalf.
You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser settings. Since browser is a little different, look at your browser’s Help Menu to learn the correct way to modify your cookies.
 <br>

If you turn cookies off, It won’t affect the user’s experience .
 
<br><br>
Third-party disclosure<br>
We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information.
 <br>

Third-party links<br>
We do not include or offer third-party products or services on our website.
 
<br>
Google<br>
Google’s advertising requirements can be summed up by Google’s Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en


<br>
We use Google AdSense Advertising on our website.<br>
Google, as a third-party vendor, uses cookies to serve ads on our site. Google’s use of the DART cookie enables it to serve ads to our users based on previous visits to our site and other sites on the Internet. Users may opt-out of the use of the DART cookie by visiting the Google Ad and Content Network privacy policy.<br>

We have implemented the following:
 <br>

We, along with third-party vendors such as Google use first-party cookies (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie) or other third-party identifiers together to compile data regarding user interactions with ad impressions and other ad service functions as they relate to our website.

<br>
Opting out:<br>
Users can set preferences for how Google advertises to you using the Google Ad Settings page. Alternatively, you can opt out by visiting the Network Advertising Initiative Opt Out page or by using the Google Analytics Opt Out Browser add on.
  
<br>
COPPA (Children Online Privacy Protection Act)<br>
 
When it comes to the collection of personal information from children under the age of 13 years old, the Children’s Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, United States’ consumer protection agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children’s privacy and safety online.<br>

We do not specifically market to children under the age of 13 years old.<br>
 

Fair Information Practices<br>
 
The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.<br>

In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur:<br>
We will notify you via email<br>
      • Within 7 business days<br>
We also agree to the Individual Redress Principle which requires that individuals have the right to legally pursue enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.<br>
 

CAN SPAM Act<br>
<br>
The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.
<br>
We collect your email address in order to:<br>
      • Send information, respond to inquiries, and/or other requests or questions
      • Process orders and to send information and updates pertaining to orders.
      • Send you additional information related to your product and/or service
      • Market to our mailing list or continue to send emails to our clients after the original transaction has occurred.
To be in accordance with CANSPAM, we agree to the following:
      • Not use false or misleading subjects or email addresses.
      • Identify the message as an advertisement in some reasonable way.
      • Include the physical address of our business or site headquarters.
      • Monitor third-party email marketing services for compliance, if one is used.
      • Honor opt-out/unsubscribe requests quickly.
      • Allow users to unsubscribe by using the link at the bottom of each email.</p>
<br>

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