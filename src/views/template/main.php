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
for ($i = 1; $i < 10; $i++) {                          // correct form will be $i < count($articles) or something similar
    $footerArticles[] = $recentArticles->getArticle($i);
}


include_once VIEWS_PATH . 'template/header.php';

include_once VIEWS_PATH . 'template/main-menu.php';

include_once VIEWS_PATH . 'template/page-title.php';


try {
    if (file_exists($viewFile)) {
        include_once $viewFile;
    }
} catch (\InvalidArgumentException $invalidArgumentException) {
    error_log($invalidArgumentException->getMessage());
    echo("Not possible to get that page!");
}


include_once VIEWS_PATH . 'template/footer.php';