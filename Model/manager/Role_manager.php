<?php

namespace App\Model\manager;

use App\Model\DB;
use App\Model\entity\Role;

class Role_manager
{
    public function findAllRole () : array
    {
        $roles = [];
        $query = DB::getPDO()->query("SELECT * FROM role");
        if($query){
            foreach ($query->fetchAll() as $roleData){
                $roles[] = (new Role())
                    ->setId($roleData['id'])
                    ->setRoleName($roleData['role_name'])
                    ;
            }
        }
        return $roles;
    }
}