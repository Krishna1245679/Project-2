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
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
            <a href="register.php">Register</a>
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
                <div class="col-xl-6 col-lg-7 ">
                    <nav class="header__menu">
                        <ul class="text-center">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="category.php">Shop</a></li>
                            <?php
                            if (isset($_SESSION['user_name'])) {
                            ?>
                            <li><a href="myorders.php">My Orders</a></li>
                            <?php
                            }
                            ?>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <?php
                        if (isset($_SESSION['user_name'])) {
                        ?>
                            <div class="header__right__auth">
                                <a href="logout.php">Logout</a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="header__right__auth">
                                <a href="login.php">Login</a>
                                <a href="register.php">Register</a>
                            </div>
                        <?php
                        }
                        ?>
                        <ul class="header__right__widget">
                            <!-- <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                    <div class="tip">2</div>
                                </a></li> -->
                            <li><a href="cart.php"><span class="icon_bag_alt"></span>
                                    <?php
                                    $t = 0;
                                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                        foreach ($_SESSION['cart'] as $id => $quantity) {
                                            $t++;
                                        }
                                        count($_SESSION['cart']);
                                        //print_r($_SESSION['cart']);
                                    } else {
                                        $t = 0;
                                    }
                                    ?>
                                    <div class="tip"><?php echo $t; ?></div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->