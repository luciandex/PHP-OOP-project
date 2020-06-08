<?php


namespace App\controllers;


use App\core\Controller;

class DefaultController extends Controller
{
    public function index() // (...$args)
    {
        $this->render('default/index');
    }

    public function errorPage404()
    {
        $this->render('default/404');
    }

}