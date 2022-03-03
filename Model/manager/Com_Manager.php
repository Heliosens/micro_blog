<?php

namespace App\Model\manager;

use App\Model\DB;
use App\Model\entity\Comment;

class Com_Manager
{
    public function comByArtId ($idArt) : array
    {
        $comments = [];
        $query = DB::getPDO()->query("
            SELECT * FROM comment WHERE article_fk IN (SELECT article.id FROM article WHERE article.id = $idArt)");
        if($query){
            $userManager = new UserManager();
            $artManager = new Article_Manager();
            foreach ($query->fetchAll() as $comData){
                $comments[] = (new Comment())
                    ->setId($comData['id'])
                    ->setAuthor($userManager->getUserById($comData['user_fk']))
                    ->setContent($comData['content'])
                    ->setArticle($artManager->getArticleById($comData['article_fk']))
                ;
            }
        }
        return $comments;
    }
}