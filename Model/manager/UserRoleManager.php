<?php

namespace App\Model\manager;

use App\Model\DB;
use App\Model\entity\User;

class UserRoleManager
{
    public function getUserByRoleId ($roleId) :array {
        $users = [];
        $query = DB::getPDO()->query("
            SELECT * FROM user WHERE id IN (SELECT user_fk FROM user_role WHERE role_fk = $roleId)
            ");
        if($query){
            foreach ($query->fetchAll() as $user){
                $users[] = (new User())
                    ->setId($user['id'])
                    ->setMail($user['email'])
                    ->setFirstname($user['firstname'])
                    ->setLastname($user['lastname'])
                    ->setPassword($user['password'])
                    ->setAge($user['age'])
                    ;
            }
        }
        return $users;
    }
}