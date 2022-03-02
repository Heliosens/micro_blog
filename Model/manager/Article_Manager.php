<?php

namespace App\Model\manager;

use App\Model\DB;
use App\Model\entity\Article;
use DateTime;

class Article_Manager
{
    public function findAll () : array
    {
        $articles = [];
        $query = DB::getPDO()->query("SELECT * FROM article");
        if($query){
            $userManager = new UserManager();
            $format = 'Y-m-d H:i:s';

            foreach ($query->fetchAll() as $articleData){
                $article[] = (new Article())
                    ->setId($articleData['id'])
                    ->setAuthor($userManager->getUserById($articleData['author']))
                    ->setContent($articleData['content'])
                    ->setDateAdd(DateTime::createFromFormat($format, $articleData['date_add']))
                    ->setDateUpdate(DateTime::createFromFormat($format, $articleData['date_update']))
                    ->setTitle($articleData['title'])
                    ;
            }
        }
        return $articles;
    }
}