<?php


namespace App\core;


abstract class Controller
{
    public function render(string $path, array $params = [])
    {
        if($path == 'home'){
            $filePath = VIEWS_PATH . 'default/index.php';
        } else {
            $filePath = VIEWS_PATH . $path . ".php";
        }

        if (!file_exists($filePath)) {
            throw new \RuntimeException("View >> $path << not found in $filePath");
        }

        $params['_SERVER'] = [];

        extract($params);

        unset($params);

        $viewFile = $filePath;

        include_once VIEWS_PATH . "template" . DIRECTORY_SEPARATOR . "main.php";


    }
}