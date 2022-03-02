<?php

namespace App\Model\manager;

use App\Model\DB;
use App\Model\entity\Comment;

class com_Manager
{
    public function findAllCom () : array
    {
        $comments = [];
        $query = DB::getPDO()->query("SELECT * FROM comment");
        if($query){
            $userManager = new UserManager();
            $artManager = new Article_Manager();

            foreach ($query->fetchAll() as $comData){
                $comments = (new Comment())
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