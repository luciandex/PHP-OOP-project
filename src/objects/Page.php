<?php


namespace App\objects;


class Page
{
    protected string $slug;
    protected string $title;
    protected string $description;
    protected string $content;
    protected string $author;
    protected $createdAt;
    protected $updatedAt;

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Page
     */
    public function setSlug(string $slug): Page
    {
        $this->slug = $slug;
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
     * @return Page
     */
    public function setTitle(string $title): Page
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Page
     */
    public function setDescription(string $description): Page
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Page
     */
    public function setContent(string $content): Page
    {
        $this->content = $content;
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
     * @return Page
     */
    public function setAuthor(string $author): Page
    {
        $this->author = $author;
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
     * @return Page
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
     * @return Page
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }


    public function isEmpty(): bool
    {
        return (empty($this->title)) && (empty($this->description)) && (empty($this->content));
    }
}