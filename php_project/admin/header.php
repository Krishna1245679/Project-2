<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/db0f5f00b6.js" crossorigin="anonymous"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="login.php">Login</a>
            <!--<a href="register.php">Register</a> -->
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 ">
                    <nav class="header__menu">

                        <ul>
                            <?php
                            if (isset($_SESSION['admin_name'])) {
                            ?>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Category</a>
                                    <ul class="dropdown">
                                        <li><a href="add_category.php">Add</a></li>
                                        <li><a href="view_category.php">View</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">SubCategory</a>
                                    <ul class="dropdown">
                                        <li><a href="add_subcategory.php">Add</a></li>
                                        <li><a href="view_subcategory.php">View</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Products</a>
                                    <ul class="dropdown">
                                        <li><a href="add_products.php">Add</a></li>
                                        <li><a href="view_products.php">View</a></li>
                                    </ul>
                                </li>
                                <li><a href="view_order.php">Orders</a></li>
                                <li><a href="view_users.php">User</a></li>
                                <li><a href="view_contact.php">Contact</a></li>
                                <!--<li><a class="active" href="logout.php">Logout</a></li>-->
                            <?php
                            }
                            ?>
                        </ul>

                    </nav>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="header__right">
                        <?php
                        if (isset($_SESSION['admin_name'])) {
                        ?>
                            <div class="header__right__auth">
                                <a href="logout.php">Logout</a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="header__right__auth">
                                <a href="login.php">Login</a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->