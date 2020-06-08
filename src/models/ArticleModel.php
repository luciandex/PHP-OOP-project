<?php


namespace App\models;


use App\core\Model;
use App\objects\Article;


class ArticleModel extends Model
{

    /**
     * @param int $id
     * @return Article
     */
    public function getArticle(?int $id = null)
    {

        $article = new Article();

        if ($id == null) {
            return $article;
        }

        $stmt = $this->conn
            ->getPdo()
            ->prepare("SELECT * FROM `articles` WHERE `id` = :id ORDER BY `created_at` ASC");
        $stmt->execute(['id' => $id]);
        $dbArticles = $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {
            /*return */
            foreach ($dbArticles as $dbArticle) {
                $article
                    ->setId($dbArticle['id'])
                    ->setUrl($dbArticle['url'])
                    ->setAuthor($dbArticle['author'])
                    ->setCategory($dbArticle['category'])
                    ->setShort($dbArticle['short'])
                    ->setTitle($dbArticle['title'])
                    ->setImage($dbArticle['image'])
                    ->setText($dbArticle['text'])
                    ->setTags(explode(',', $dbArticle['tags']))
                    ->setCreatedAt($dbArticle['created_at'])
                    ->setUpdatedAt($dbArticle['updated_at']);
            }
        }
        return $article;
    }


    public function getCatAndTags(?int $id = null)
    {

        $article = new Article();

        if ($id == null) {
            return $article;
        }

        $stmt = $this->conn
            ->getPdo()
            ->prepare("SELECT DISTINCT `category`,`tags` FROM `articles` WHERE `id` = :id");

        $stmt->execute(['id' => $id]);
        $dbArticles = $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {
            /*return */
            foreach ($dbArticles as $dbArticle) {
                $article
                    ->setCategory($dbArticle['category'])
                    ->setTags(explode(',', $dbArticle['tags']));
            }
        }
        return $article;
    }
}