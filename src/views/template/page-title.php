<?php


// get page title section only if page slug exist
// (for home page "page slug" does not exist; it will be shown slider by default)

if (!isset($_GET['slug'])) {
    echo '';
} else {
    $slug = $_GET['slug'];
    ?>

    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url(<?php echo RESOURCES_PATH; ?>images/background/3.jpg);">
        <div class="container">
            <div class="title-text">
                <h1>
                    <?php echo $page->getTitle();?>
                </h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="<?php echo BASE_URL; ?>"><?php echo 'home'; ?> &nbsp;/</a>
                    </li>
                    <li><?php echo $page->getTitle(); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

<?php  }; // end brace for ELSE statement