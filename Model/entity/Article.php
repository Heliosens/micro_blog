<?php

namespace App\Model\entity;

use DateTime;

class Article
{
    private ?int $id;
    private string $title;
    private string $content;
    private DateTime $date_add;
    private DateTime $date_update;
    private User $author;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;
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
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
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
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateAdd(): DateTime
    {
        return $this->date_add;
    }

    /**
     * @param DateTime $date_add
     */
    public function setDateAdd(DateTime $date_add): self
    {
        $this->date_add = $date_add;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdate(): DateTime
    {
        return $this->date_update;
    }

    /**
     * @param DateTime $date_update
     */
    public function setDateUpdate(DateTime $date_update): self
    {
        $this->date_update = $date_update;
        return $this;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor(User $author): self
    {
        $this->author = $author;
        return $this;
    }
}