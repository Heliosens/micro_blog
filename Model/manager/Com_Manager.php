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
            $com_Manager = new com_Manager();

            foreach ($query->fetchAll() as $comData){
                $comments = (new Comment())
                    ->setArticle($com_Manager->getArtById($comData['article']))
                    ->setContent($comData['content'])
                    ->setId($comData['id'])
                    ;
            }
        }
    }
}