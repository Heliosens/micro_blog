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
                $articles[] = (new Article())
                    ->setId($articleData['id'])
                    ->setAuthor($userManager->getUserById($articleData['user_fk']))
                    ->setContent($articleData['content'])
                    ->setDateAdd(DateTime::createFromFormat($format, $articleData['date_add']))
                    ->setDateUpdate(DateTime::createFromFormat($format, $articleData['date_update']))
                    ->setTitle($articleData['title'])
                    ;
            }
        }
        return $articles;
    }

    public function getArticleById($id) :Article
    {
        $query = DB::getPDO()->query("SELECT * FROM article WHERE id = $id");
        $article = new Article();
        $format = 'Y-m-d H:i:s';
        if($query){
            $userManager = new UserManager();
            $data = $query->fetch();
            $article->setId($id);
            $article->setTitle($data['title']);
            $article->setContent($data['content']);
            $article->setDateAdd(DateTime::createFromFormat($format, $data['date_add']));
            $article->setDateUpdate(DateTime::createFromFormat($format, $data['date_update']));
            $article->setAuthor($userManager->getUserById($data['user_fk']));
        }
        return $article;
    }
}