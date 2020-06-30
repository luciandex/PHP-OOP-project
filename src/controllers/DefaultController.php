<?php


namespace App\controllers;

use App\core\Controller;


class DefaultController extends Controller
{
    public function index()
    {
        $menuItems = (new PageController())->getMenuItems();

        $this->render('default/index',
            [
            'socialMediaItems' => $menuItems['socialMedia'],
            'menuItems' => $menuItems['mainMenu'],
            'footerMenuItems' => $menuItems['footerLinks']
            ]);
    }

    public function errorPage404()
    {
        $menuItems = (new PageController())->getMenuItems();

        $this->render('default/404',
                [
                    'socialMediaItems' => $menuItems['socialMedia'],
                    'menuItems' => $menuItems['mainMenu'],
                    'footerMenuItems' => $menuItems['footerLinks']
                ]);
    }

}