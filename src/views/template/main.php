<?php declare(strict_types=1);

use App\models\MenuModel;
use App\models\ArticleModel;

$socialMediaItems = (new MenuModel())
    ->getMenu(MenuModel::SOCIAL_MEDIA)
    ->getMenuItems();

$menuItems = (new MenuModel())
    ->getMenu(MenuModel::MAIN_MENU)
    ->getMenuItems();

$footerMenuItems = (new MenuModel())
    ->getMenu(MenuModel::FOOTER_LINKS)
    ->getMenuItems();


$recentArticles = new ArticleModel();
for ($i = 1; $i < 28; $i++) {
    $footerArticles[] = $recentArticles->getArticle($i);
}


include_once VIEWS_PATH . 'template/header.php';

include_once VIEWS_PATH . 'template/main-menu.php';

include_once VIEWS_PATH . 'template/page-title.php';

//var_dump($viewFile);

try {
    if (file_exists($viewFile)) {
        include_once $viewFile;
    }

} catch (\RuntimeException $e1) {
    error_log($e1->getMessage());
    echo("I was unable to find that page!");
} catch (\InvalidArgumentException $e2) {
    error_log($e2->getMessage());
    echo("Unable to get that page!");
}


include_once VIEWS_PATH . 'template/footer.php';