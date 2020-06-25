<?php


namespace App\controllers;

use App\core\Controller;
use App\models\ArticleModel;
use App\models\PageModel;


class BlogController extends Controller
{
    protected $model;
    protected $articleModel;

    public function __construct()
    {
        $this->model = new PageModel();
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $page = $this->model->getPage('blog');

        if($page->isEmpty()){
            (new DefaultController())->errorPage404();
        }

        for ($i = 1; $i < 10; $i++) {                              // correct form will be $i < count($articles) or something similar
            $articles[] = $this->articleModel->getArticle($i);
            $categories[] = $this->articleModel->getCatAndTags($i);
        }

        foreach ($categories as $category) {
            $getCategories[] = $category->getCategory();
            $getTags[] = $category->getCategory();
        }

        if (empty($articles)) {
            header("Location: " . BASE_URL);
            throw new \InvalidArgumentException("At this moment the blog was not found on this site");
        }

        $this->render('blog', ['articles' => $articles, 'getCategories' => $getCategories, 'getTags' => $getTags, 'page' => $page]);
    }


    public function article(string $id) {

        $page = $this->model->getPage('blog');

        if($page->isEmpty()){
            (new DefaultController())->errorPage404();
        }

        $article = (new \App\models\ArticleModel())->getArticle($id);

        for ($i = 1; $i < 10; $i++) {                              // correct form will be $i < count($articles) or something similar
            $categories[] = $this->articleModel->getCatAndTags($i);
        }

        foreach ($categories as $category) {
            $getCategories[] = $category->getCategory();
            $getTags[] = $category->getCategory();
        }

        $this->render('template/article', ['article' => $article, 'getCategories' => $getCategories, 'getTags' => $getTags, 'page' => $page]);
    }

}