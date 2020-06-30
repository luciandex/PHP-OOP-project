<?php


namespace App\traits;

use App\controllers\PageController;

trait getMenuItemsTrait
{
    public function getMenuItems()
    {
        $this->pageController = new PageController();

        $menuItems = [
            'socialMedia' => $this->pageController->getMenu(1),
            'mainMenu' => $this->pageController->getMenu(2),
            'footerLinks' => $this->pageController->getMenu(3)
        ];
        return $menuItems;
    }
}