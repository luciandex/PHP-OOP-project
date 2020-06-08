<?php

namespace App\models;

use App\core\Model;
use App\objects\Page;

class PageModel extends Model
{
    /**
     * @param string|null $slug
     * @return Page
     */
    public function getPage(?string $slug = null)
    {
        $page = new Page();

        if ($slug == null) {
            return $page;
        }

        $stmt = $this->conn
            ->getPDO()
            ->prepare("SELECT * FROM `pages` WHERE `slug` = :slug");
        $stmt->execute(['slug' => $slug]);
        $dbPage = $stmt->fetch();

        if ($stmt->rowCount() > 0) {
            /*return */
            $page
                ->setSlug($dbPage['slug'])
                ->setTitle($dbPage['title'])
                ->setDescription($dbPage['description'])
                ->setContent($dbPage['content'])
                ->setAuthor($dbPage['author'])
                ->setCreatedAt($dbPage['created_at'])
                ->setUpdatedAt($dbPage['updated_at']);
            return $page;
        }
    }
}