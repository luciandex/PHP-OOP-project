<?php


namespace App\models;

use App\objects\Menu;


class MenuFactory
{
    public static function buildMenu(
        int $parentId,
        ?string $url,
        ?string $text,
        ?string $icon,
        string $createdAt,
        string $updatedAt
    ): Menu
    {
        $menu = new Menu();
        $menu
            ->setParentId($parentId)
            ->setUrl($url)
            ->setText($text)
            ->setIcon($icon)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt);

        return $menu;
    }
}