<?php

namespace App\models;

class MenuModel
{
    protected ?string $parentId;
    protected ?string $url;
    protected ?string $text;
    protected ?string $icon;
    protected $createdAt;
    protected $updatedAt;


    /**
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * @param string|null $parentId
     * @return MenuModel
     */
    public function setParentId(?string $parentId): MenuModel
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     * @return MenuModel
     */
    public function setUrl(?string $url): MenuModel
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     * @return MenuModel
     */
    public function setText(?string $text): MenuModel
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param string|null $icon
     * @return MenuModel
     */
    public function setIcon(?string $icon): MenuModel
    {
        $this->icon = $icon;
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
     * @return MenuModel
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
     * @return MenuModel
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function __construct(?string $parentId = null)
    {
        $this->setParentId($parentId);
    }

    public function isEmpty(): bool
    {
        return (empty($this->parentId)) && (empty($this->url)) && (empty($this->text));
    }


}