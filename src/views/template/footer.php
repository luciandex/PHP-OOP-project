<?php declare(strict_types=1);


?>

<!--footer-main-->
<footer class="footer-main">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about-widget">
                        <div class="footer-logo">
                            <figure>
                                <a href="<?php echo BASE_URL; ?>">
                                    <img src="<?php echo RESOURCES_PATH; ?>images/logo-2.png" alt="">
                                </a>
                            </figure>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
                        <ul class="location-link">
                            <li class="item">
                                <i class="fa fa-map-marker"></i>
                                <p>Modamba, NY 80021, United States</p>
                            </li>
                            <li class="item">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="mailto:Support@medic.com">
                                    <p>Support@medic.com</p>
                                </a>
                            </li>
                            <li class="item">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p>(88017) +123 4567</p>
                            </li>
                        </ul>
                        <ul class="list-inline social-icons">

                            <?php include VIEWS_PATH . "template/social-media.php"; ?>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h6>Services</h6>
                    <ul class="menu-link">

                        <?php foreach ($footerMenuItems as $footerMenuItem) {
                            echo '<li><a href="' .
                                $footerMenuItem->getUrl() .
                                '"><i class="fa fa-angle-right" aria-hidden="true"></i>' .
                                $footerMenuItem->getText() .
                                '</a></li>';
                        } ?>

                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="social-links">
                        <h6>Recent Posts</h6>
                        <ul>

                            <?php $ky = 0;
                            foreach (array_reverse($footerArticles) as $ky => $footerArticle) {
                                $ky++;
                                if ($ky < 3) {
                                    ?>

                                    <li class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="<a href="<?php echo $footerArticle->getUrl(); ?>">
                                                <img class="media-object"
                                                     src="<?php echo RESOURCES_PATH; ?>images/blog/post-thumb-small.jpg"
                                                     alt="post-thumb"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a
                                                            href="<?php echo $footerArticle->getUrl(); ?>"> <?php echo substr($footerArticle->getTitle(), 0, 20) . "..."; ?> </a>
                                                </h4>
                                                <p><?php echo substr($footerArticle->getShort(), 0, 80) . "..."; ?></p>
                                            </div>
                                        </div>
                                    </li>

                                <?php } else break;
                            } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container clearfix">
            <div class="copyright-text">
                <p>&copy; Copyright <?php echo date('Y'); ?>. All Rights Reserved by
                    <a style="color: deepskyblue" href="<?php echo BASE_URL; ?>"><strong>Medic</strong></a>
                </p>
            </div>
            <ul class="footer-bottom-link">
                <li>
                    <a href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li>
                    <a href="?controller=page&slug=about">About</a>
                </li>
                <li>
                    <a href="?controller=page&slug=contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
</div>

<script src="<?php echo RESOURCES_PATH; ?>plugins/jquery.js"></script>

<script src="<?php echo RESOURCES_PATH; ?>plugins/bootstrap.min.js"></script>
<script src="<?php echo RESOURCES_PATH; ?>plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="<?php echo RESOURCES_PATH; ?>plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="<?php echo RESOURCES_PATH; ?>plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="<?php echo RESOURCES_PATH; ?>plugins/google-map/gmap.js"></script>

<script src="<?php echo RESOURCES_PATH; ?>plugins/validate.js"></script>
<script src="<?php echo RESOURCES_PATH; ?>plugins/wow.js"></script>
<script src="<?php echo RESOURCES_PATH; ?>plugins/jquery-ui.js"></script>
<script src="<?php echo RESOURCES_PATH; ?>plugins/timePicker.js"></script>
<script src="<?php echo RESOURCES_PATH; ?>js/script.js"></script>
</body>

</html>