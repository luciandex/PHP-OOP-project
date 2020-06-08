<?php


namespace App\models;


use App\core\Model;
use App\objects\Menu;


class MenuModel extends Model
{
    public const MAIN_MENU = '2';
    public const SOCIAL_MEDIA = '1';
    public const FOOTER_LINKS = '3';

    /**
     * @param string|null $parentId
     * @return Menu
     */
    public function getMenu(?string $parentId = null)
    {
        $menu = new Menu($parentId);

        if ($parentId == null) {
            return $menu;
        }

        $stmt = $this->conn
            ->getPDO()
            ->prepare("SELECT * FROM `menu-items` WHERE `parent_id` = :parentId");
        $stmt->execute(['parentId' => $parentId]);

        $dbMenuItems = $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {
            foreach ($dbMenuItems as $dbMenu) {
                $menu
                    ->setParentId($dbMenu['parent_id'])
                    ->setUrl($dbMenu['url'])
                    ->setText($dbMenu['text'])
                    ->setIcon($dbMenu['icon'])
                    ->setCreatedAt($dbMenu['created_at'])
                    ->setUpdatedAt($dbMenu['updated_at']);
            }
        }

        $menuItems = $this->mapArrayToMenuItems($dbMenuItems);

        $menu->setMenuItems($menuItems);

        return $menu;
    }

    private function mapArrayToMenuItems(array $dbMenus): array
    {
        $results = [];
        foreach ($dbMenus as $dbMenu) {
            $results[] = MenuFactory::buildMenu(
                $dbMenu['parent_id'],
                $dbMenu['url'],
                $dbMenu['text'],
                $dbMenu['icon'],
                $dbMenu['created_at'],
                $dbMenu['updated_at']
            );
        }
        return $results;
    }

}