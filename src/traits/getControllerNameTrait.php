<?php


namespace App\traits;


trait getControllerNameTrait
{
    protected string $controllerName;

    public function getControllerName(): string
    {
        $this->controllerName = lcfirst(str_replace('Controller', '', str_replace('App\\controllers\\', '', self::class)));

        return $this->controllerName;
    }

}