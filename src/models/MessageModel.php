<?php

namespace App\Models;


class MessageModel
{
    protected int $id;
    protected ?string $name;
    protected ?string $email;
    protected ?string $subject;
    protected ?string $message;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return MessageModel
     */
    public function setId(int $id): MessageModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return null|MessageModel
     */
    public function setName(?string $name): ?MessageModel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return null|MessageModel
     */
    public function setEmail(?string $email): ?MessageModel
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     * @return null|MessageModel
     */
    public function setSubject(?string $subject): ?MessageModel
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return null|MessageModel
     */
    public function setMessage(?string $message): ?MessageModel
    {
        $this->message = $message;
        return $this;
    }
}