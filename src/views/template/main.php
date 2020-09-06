<?php declare(strict_types=1);

include_once VIEWS_PATH . 'template/header.php';

include_once VIEWS_PATH . 'template/page-title.php';


try {
    if (file_exists($viewFile)) {
        include_once $viewFile;
    }

} catch (\InvalidArgumentException $e) {
    error_log($e->getMessage());
    echo("Not possible to get that page!");
}
//catch (\RuntimeException $r){
//    error_log($r->getMessage());
//    echo "That page is invalid. Try another page from menu.";
//}


include_once VIEWS_PATH . 'template/footer.php';