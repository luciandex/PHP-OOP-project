<?php declare(strict_types=1);?>

<section class="blog-section style-four section">

    <div class="container">
        <div class="row">

<!-- Articles zone -->
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">

                    <?php foreach ($articles as $article) {
                            ?>

                            <div class="item-holder">
                                <div class="image-box">
                                    <figure>
                                        <a href="<?php echo $article->getUrl(); ?>"><img
                                                    src="<?php echo RESOURCES_PATH; ?>images/blog/<?php echo $article->getImage(); ?>"
                                                    alt=""></a>
                                    </figure>
                                </div>
                                <div class="content-text">
                                    <a href="<?php echo $article->getUrl() ?>">
                                        <h6><?php echo $article->getTitle(); ?></h6>
                                    </a>
                                    <span>By <?php echo $article->getAuthor(); ?> / <?php echo $article->getCreatedAt(); ?></span>
                                    <p><?php echo $article->getShort(); ?></p>
                                    <div class="link-btn">
                                        <a href="<?php echo $article->getUrl(); ?>" class="btn-style-one">read more</a>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                </div>
            </div>
<!-- End Articles zone -->

<!-- Begin Side Bar zone -->

<?php include_once VIEWS_PATH . 'template/side-bar-blog.php'; ?>

<!-- End Side Bar zone -->


        </div>
        <div class="styled-pagination">
            <ul>
                <li><a class="prev" href="#"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a class="next" href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
            </ul>
        </div>

    </div>
</section>


