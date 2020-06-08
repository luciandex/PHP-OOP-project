<?php

namespace App\objects;

class Message
{
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $subject;
    protected string $message;
    protected int $sentDate;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Message
     */
    public function setId(int $id): Message
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Message
     */
    public function setName(string $name): Message
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Message
     */
    public function setEmail(string $email): Message
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return Message
     */
    public function setSubject(string $subject): Message
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Message
     */
    public function setMessage(string $message): Message
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return int
     */
    public function getSentDate(): int
    {
        return $this->sentDate;
    }

    /**
     * @param int $sentDate
     * @return Message
     */
    public function setSentDate(int $sentDate): Message
    {
        $this->sentDate = $sentDate;
        return $this;
    }
}