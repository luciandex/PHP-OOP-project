<?php


namespace App\models;


class MenuFactory
{
    public static function buildMenu(int $parentId, ?string $url, ?string $text, ?string $icon, string $createdAt, string $updatedAt): MenuModel
    {
        $menu = new MenuModel();
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