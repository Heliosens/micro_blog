<?php


class Article
{
    private int $id;
    private string $title;
    private string $content;
    private string $date_add;
    private string $date_update;
    private string $user_fk;

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
    public function setId(int $id): void
    {
        $this->id = $id;
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
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getDateAdd(): string
    {
        return $this->date_add;
    }

    /**
     * @param string $date_add
     */
    public function setDateAdd(string $date_add): void
    {
        $this->date_add = $date_add;
    }

    /**
     * @return string
     */
    public function getDateUpdate(): string
    {
        return $this->date_update;
    }

    /**
     * @param string $date_update
     */
    public function setDateUpdate(string $date_update): void
    {
        $this->date_update = $date_update;
    }

    /**
     * @return string
     */
    public function getUserFk(): string
    {
        return $this->user_fk;
    }

    /**
     * @param string $user_fk
     */
    public function setUserFk(string $user_fk): void
    {
        $this->user_fk = $user_fk;
    }


}