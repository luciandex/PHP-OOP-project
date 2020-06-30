<?php


namespace App\models;


class ArticleModel
{
    protected int $id;
    protected string $url;
    protected string $author;
    protected string $category;
    protected string $short;
    protected string $title;
    protected string $image;
    protected string $text;

    protected array $tags;

    protected $createdAt;
    protected $updatedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ArticleModel
     */
    public function setId(int $id): ArticleModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return ArticleModel
     */
    public function setUrl(string $url): ArticleModel
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return ArticleModel
     */
    public function setAuthor(string $author): ArticleModel
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return ArticleModel
     */
    public function setCategory(string $category): ArticleModel
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getShort(): string
    {
        return $this->short;
    }

    /**
     * @param string $short
     * @return ArticleModel
     */
    public function setShort(string $short): ArticleModel
    {
        $this->short = $short;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ArticleModel
     */
    public function setTitle(string $title): ArticleModel
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return ArticleModel
     */
    public function setImage(string $image): ArticleModel
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return ArticleModel
     */
    public function setText(string $text): ArticleModel
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     * @return ArticleModel
     */
    public function setTags(array $tags): ArticleModel
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return ArticleModel
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     * @return ArticleModel
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function isEmpty(): bool
    {
        return (empty($this->id)) && (empty($this->title)) && (empty($this->short));
    }


}