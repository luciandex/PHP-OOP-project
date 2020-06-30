<?php declare(strict_types=1);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Medic | Medical HTML Template</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?php echo RESOURCES_PATH; ?>plugins/slick/slick.css">
    <link rel="stylesheet" href="<?php echo RESOURCES_PATH; ?>plugins/slick/slick-theme.css">
    <!-- FancyBox -->
    <link rel="stylesheet" href="<?php echo RESOURCES_PATH; ?>plugins/fancybox/jquery.fancybox.min.css">

    <!-- Stylesheets -->
    <link href="<?php echo RESOURCES_PATH; ?>css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo RESOURCES_PATH; ?>images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo RESOURCES_PATH; ?>images/favicon.ico" type="image/x-icon">

</head>


<body>
<div class="page-wrapper">
<!--     Preloader -->
     <div class="preloader"></div>
<!--     Preloader -->


    <!--header top-->
    <div class="header-top">
        <div class="container clearfix">
            <div class="top-left">
                <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
            </div>
            <div class="top-right">
                <ul class="social-links">

                <?php include VIEWS_PATH . "template/social-media.php"; ?>

                </ul>
            </div>
        </div>
    </div>
    <!--header top-->

    <!--Header Upper-->
    <section class="header-uper">
        <div class="container clearfix">
            <div class="logo">
                <figure>
                    <a href="<?php echo BASE_URL; ?>">
                        <img src="<?php echo RESOURCES_PATH; ?>images/logo.png" alt="" width="130">
                    </a>
                </figure>
            </div>
            <div class="right-side">
                <ul class="contact-info">
                    <li class="item">
                        <div class="icon-box">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <strong>Email</strong>
                        <br>
                        <a href="#">
                            <span>info@medic.com</span>
                        </a>
                    </li>
                    <li class="item">
                        <div class="icon-box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <strong>Call Now</strong>
                        <br>
                        <span>+ (88017) - 123 - 4567</span>
                    </li>
                </ul>
                <div class="link-btn">
                    <a href="?controller=page&slug=appointment" class="btn-style-one">Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!--Header Upper-->

<?php include_once VIEWS_PATH . 'template/main-menu.php'; ?>