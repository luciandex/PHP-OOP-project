<?php


namespace App\controllers;

use App\core\Controller;
use App\core\database\Connection;
use App\models\MenuFactory;
use App\models\MenuModel;
use App\models\PageModel;

class PageController extends Controller
{
    use \App\traits\getMenuItemsTrait;

    public PageModel $pageModel;
    protected MenuModel $menuModel;


    public function index($slug = null)
    {
        try {
            $this->pageModel = $this->getPage($slug);
        }catch(\InvalidArgumentException $e){
            error_log($e->getMessage());
            (new DefaultController())->errorPage404();
        }

        $menuItems = $this->getMenuItems();

        if (!isset($this->pageModel)) {
            (new DefaultController())->errorPage404();
        }

        $this->render($slug,
            [
                'page' => $this->pageModel,
                'socialMediaItems' => $menuItems['socialMedia'],
                'menuItems' => $menuItems['mainMenu'],
                'footerMenuItems' => $menuItems['footerLinks']
            ]);
    }

    /**
     * @param string|null $slug
     * @return PageModel
     */
    public function getPage(?string $slug = null)
    {
        $this->pageModel = new PageModel();

        if ($slug == null) {
            return $this->pageModel;
        }

        $stmt = (Connection::getConn())
            ->getPDO()
            ->prepare("SELECT * FROM `pages` WHERE `slug` = :slug");
        $stmt->execute(['slug' => $slug]);
        $dbPage = $stmt->fetch();

        if ($dbPage == false) {
            throw new \InvalidArgumentException("Invalid slug. Try to access from menu.");
        }

        $count = ($dbPage != false) ? count($dbPage) : 0;

        if ($count > 0) {
            /*return */
            $this->pageModel
                ->setSlug($dbPage['slug'])
                ->setTitle($dbPage['title'])
                ->setDescription($dbPage['description'])
                ->setContent($dbPage['content'])
                ->setAuthor($dbPage['author'])
                ->setCreatedAt($dbPage['created_at'])
                ->setUpdatedAt($dbPage['updated_at']);
        }
        return $this->pageModel;
    }


    /**
     * @param string|null $parentId
     ** @return mixed
     */
    public function getMenu(?string $parentId = null)
    {
        $this->menuModel = new MenuModel($parentId);

        if ($parentId == null) {
            return $this->menuModel;
        }

        $stmt = (Connection::getConn())
            ->getPDO()
            ->prepare("SELECT * FROM `menu-items` WHERE `parent_id` = :parentId");
        $stmt->execute(['parentId' => $parentId]);

        $dbMenuItems = $stmt->fetchAll();

        return $this->mapArrayToMenuItems($dbMenuItems);
    }

    private function mapArrayToMenuItems(array $dbMenuItems): array
    {
        $menuItems = [];
        foreach ($dbMenuItems as $dbMenuItem) {
            $menuItems[] = MenuFactory::buildMenu(
                $dbMenuItem['parent_id'],
                $dbMenuItem['url'],
                $dbMenuItem['text'],
                $dbMenuItem['icon'],
                $dbMenuItem['created_at'],
                $dbMenuItem['updated_at']
            );
        }
        return $menuItems;
    }
}