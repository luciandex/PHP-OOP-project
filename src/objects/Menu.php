<?php


namespace App\objects;


class Menu
{
    protected ?string $parentId;
    protected ?string $url;
    protected ?string $text;
    protected ?string $icon;
    protected $createdAt;
    protected $updatedAt;
    protected array $menuItems;


    /**
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * @param string|null $parentId
     * @return Menu
     */
    public function setParentId(?string $parentId): Menu
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
     * @return Menu
     */
    public function setUrl(?string $url): Menu
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
     * @return Menu
     */
    public function setText(?string $text): Menu
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
     * @return Menu
     */
    public function setIcon(?string $icon): Menu
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
     * @return Menu
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
     * @return Menu
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return array
     */
    public function getMenuItems(): array
    {
        return $this->menuItems;
    }

    /**
     * @param array $menuItems
     * @return Menu
     */
    public function setMenuItems(array $menuItems): Menu
    {
        $this->menuItems = $menuItems;
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