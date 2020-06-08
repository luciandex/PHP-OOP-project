<?php declare(strict_types=1);

use App\models\ArticleModel;

$articleModel = new ArticleModel();
for ($i = 1; $i < 28; $i++) {
    $articles[] = $articleModel->getArticle($i);
    $categories[] = $articleModel->getCatAndTags($i);
}

foreach ($categories as $category) {
    $getCategories[] = $category->getCategory();
    $getTags[] = $category->getCategory();
}

?>

<section class="blog-section style-four section">

    <div class="container">
        <div class="row">

            <!-- Articles zone -->

            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">

                    <?php $key = 0;
                    foreach (array_reverse($articles) as $key => $article) {
                        $key++;
                        if ($key < 4) {
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

                        <?php } else break;
                    } ?>

                </div>
            </div>

            <!-- End Articles zone -->

            <!-- Begin Side Bar zone -->

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="right-side">
                    <div class="text-title">
                        <h6>Search</h6>
                    </div>
                    <div class="search-box">
                        <form method="post" action="../../index.php">
                            <input type="search" name="search" placeholder="Enter to Search" required="">
                        </form>
                    </div>
                    <div class="categorise-menu">
                        <div class="text-title">
                            <h6>Categories</h6>
                        </div>
                        <ul class="categorise-list">

                            <?php foreach (array_unique($getCategories) as $category): ?>

                                <li><a href="#"><?php echo $category; ?> <span>(
                                            <?php
                                            foreach (array_count_values($getCategories) as $k => $getNumber) {
                                                if ($k == $category) echo $getNumber;
                                                else echo '';
                                            }
                                            ?>)</span></a></li>

                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <div class="tag-list">
                        <div class="text-title">
                            <h6>Tags</h6>
                        </div>

                        <?php foreach (array_unique($getTags) as $tag) : ?>

                            <a href="#"><?php echo $tag; ?></a>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

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


