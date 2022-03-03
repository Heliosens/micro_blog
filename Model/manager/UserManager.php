<?php

namespace App\Model\manager;

use App\Model\DB;
use App\Model\entity\User;

class UserManager
{

    public function findAll(): array
    {
        $query = DB::getPDO()->query("SELECT * FROM user");
        $users = [];
        if($query){
            foreach ($query->fetchAll() as $data){
                $users[] = (new User())
                    ->setId($data['id'])
                    ->setMail($data['email'])
                    ->setAge($data['age'])
                    ->setPassword($data['password'])
                    ->setLastname($data['lastname'])
                    ->setFirstname($data['firstname'])
                ;
            }
        }
        return $users;
    }

    public function getUserById ($id) :User {
        $query = DB::getPDO()->query("SELECT * FROM user WHERE id = $id");
        $user = new User();
        if($query){
            $data = $query->fetch();
            $user->setId($id);
            $user->setMail($data['email']);
            $user->setFirstname($data['firstname']);
            $user->setLastname($data['lastname']);
            $user->setPassword($data['password']);
            $user->setAge($data['age']);
        }
        return $user;
    }
}