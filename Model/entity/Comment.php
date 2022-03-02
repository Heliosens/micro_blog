<?php

namespace App\Model\entity;

class Comment
{
    private int $id;
    private string $content;
    private int $user_fk;
    private int $article_fk;

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
     * @return int
     */
    public function getUserFk(): int
    {
        return $this->user_fk;
    }

    /**
     * @param int $user_fk
     */
    public function setUserFk(int $user_fk): void
    {
        $this->user_fk = $user_fk;
    }

    /**
     * @return int
     */
    public function getArticleFk(): int
    {
        return $this->article_fk;
    }

    /**
     * @param int $article_fk
     */
    public function setArticleFk(int $article_fk): void
    {
        $this->article_fk = $article_fk;
    }


}