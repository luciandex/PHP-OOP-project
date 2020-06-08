<?php declare(strict_types=1);

define("ROOT_DIR", $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);

require ROOT_DIR . 'bootstrap.php';

//include_once ROOT_DIR . 'src/views/template/header.php';

include_once ROOT_DIR . 'src/views/template/main-menu.php';

include_once ROOT_DIR . 'src/views/template/page-title.php';
?>

<!-- start 404 section -->
<section class="error-box bg-img" data-overlay-dark="0"
         data-background="<?php echo RESOURCES_PATH; ?>images/gallery/gallery-03.jpg">
    <div class="error-box-text">
        <h1>404</h1>
        <h3>Page not Found</h3>
        <h4>We're sorry, Please try one of the following Pages.</h4>
        <div class="margin-30px-top"><a href="index.php" class="butn"><span>Back Home</span></a></div>
    </div>
</section>
<!-- end 404 section -->

<?php
//include_once ROOT_DIR . 'src/views/template/footer.php';

?>
<!-- start 404 section -->
<!--    <section class="error-box bg-img" data-overlay-dark="0" data-background="--><?php //echo RESOURCES_PATH; ?><!--images/gallery/gallery-03.jpg">-->
<!--        <div class="error-box-text">-->
<!--            <h1>404</h1>-->
<!--            <h3>Page not Found</h3>-->
<!--            <h4>We're sorry, Please try one of the following Pages.</h4>-->
<!--            <div class="margin-30px-top"><a href="index.php" class="butn"><span>Back Home</span></a></div>-->
<!--        </div>-->
<!--    </section>-->
<!-- end 404 section -->
