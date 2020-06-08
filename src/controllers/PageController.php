<?php


namespace App\controllers;

use App\core\Controller;
use App\models\PageModel;


class PageController extends Controller
{
    protected $pageModel;

    public function __construct()
    {
        $this->pageModel = new PageModel();
    }

    public function index($slug = null)
    {
        $page = $this->pageModel->getPage($slug);

        if ($page->isEmpty()) {
            header("Location: " . BASE_URL . "default/404.php");
            throw new \InvalidArgumentException("Page not found here");
        }

        $this->render($slug, ['info' => $page]);
    }
}