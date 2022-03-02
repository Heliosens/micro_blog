<?php

namespace App\Model\manager;

use App\Model\DB;
use App\Model\entity\User;

class UserManager
{
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