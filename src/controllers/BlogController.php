<?php


namespace App\controllers;

use App\core\Controller;
use App\models\ArticleModel;


class BlogController extends Controller

{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        for ($i = 1; $i < 28; $i++) {
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

        $this->render('blog', ['articles' => $articles, 'getCategories' => $getCategories, 'getTags' => $getTags]);
    }


    public function article(string $id) {
        $article = (new \App\models\ArticleModel())->getArticle($id);

        for ($i = 1; $i < 28; $i++) {
            $categories[] = $this->articleModel->getCatAndTags($i);
        }

        foreach ($categories as $category) {
            $getCategories[] = $category->getCategory();
            $getTags[] = $category->getCategory();
        }

        $this->render('template/article', ['article' => $article, 'getCategories' => $getCategories, 'getTags' => $getTags]);
    }

}