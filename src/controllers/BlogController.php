<?php


namespace App\controllers;

use App\core\Controller;
use App\core\database\Connection;
use App\models\ArticleModel;

//use App\controllers\PageController;


class BlogController extends Controller
{
    use \App\traits\getControllerNameTrait;
    use \App\traits\getMenuItemsTrait;

    protected $pageController;
    protected $articles;
    protected array $catAndTags;

    public function index()
    {
        $this->pageController = new PageController();

        $page = $this->pageController->getPage($this->getControllerName());

        $menuItems = $this->getMenuItems();

        if (!isset($this->pageController)) {
            (new DefaultController())->errorPage404();
        }

        $this->articles = new ArticleModel();
        $this->articles = $this->getArticles();
        $this->catAndTags = $this->getCatAndTags();

        if (!isset($this->articles)) {
            header("Location: " . BASE_URL);
            throw new \InvalidArgumentException("At this moment the blog was not found on this site");
        }
        $this->render(
            $this->getControllerName(),
            [
                'page' => $page,
                'articles' => $this->articles,
                'categories' => $this->catAndTags['categories'],
                'tags' => $this->catAndTags['tags'],
                'socialMediaItems' => $menuItems['socialMedia'],
                'menuItems' => $menuItems['mainMenu'],
                'footerMenuItems' => $menuItems['footerLinks']
            ]);
    }

    public function getArticles()
    {
        $articles = [];
        $stmt = (Connection::getConn())
            ->getPdo()
            ->prepare("SELECT * FROM `articles` ORDER BY `created_at` DESC");
        $stmt->execute();
        $dbArticles = $stmt->fetchAll();

        if (isset($dbArticles) && count($dbArticles) > 0) {

            foreach ($dbArticles as $dbArticle) {
                $articles[] = (new ArticleModel())
                    ->setId($dbArticle['id'])
                    ->setUrl($dbArticle['url'])
                    ->setAuthor($dbArticle['author'])
                    ->setCategory($dbArticle['category'])
                    ->setShort($dbArticle['short'])
                    ->setTitle($dbArticle['title'])
                    ->setImage($dbArticle['image'])
                    ->setText($dbArticle['text'])
                    ->setTags(explode(',', $dbArticle['tags']))
                    ->setCreatedAt($dbArticle['created_at'])
                    ->setUpdatedAt($dbArticle['updated_at']);
            }
        }

        return $articles;
    }


    public function getCatAndTags()
    {
        $catAndTags['categories'] = [];
        $catAndTags['tags'] = [];

        foreach ($this->articles as $article) {
            $catAndTags['categories'][] = $article->getCategory();
            $catAndTags['tags'][] = $article->getTags();
        }

        return $catAndTags;
    }


    public function article($id)
    {
        $this->pageController = new PageController();

        $menuItems = $this->getMenuItems();

        if (!isset($this->pageController)) {
            (new DefaultController())->errorPage404();
        }

        $this->articles = $this->getArticles();
        $this->catAndTags = $this->getCatAndTags();

        foreach ($this->articles as $article) {
            if ($article->getId() == $id) {
                $this->render('template/article',
                    ['page' => $this->pageController,
                        'article' => $article,
                        'categories' => $this->catAndTags['categories'],
                        'tags' => $this->catAndTags['tags'],
                        'socialMediaItems' => $menuItems['socialMedia'],
                        'menuItems' => $menuItems['mainMenu'],
                        'footerMenuItems' => $menuItems['footerLinks']
                    ]);
            }
        }
    }

}