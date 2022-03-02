<?php

namespace App\Model\entity;

class Role
{
    private int $id;
    private int $role_name;

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
     * @return int
     */
    public function getRoleName(): int
    {
        return $this->role_name;
    }

    /**
     * @param int $role_name
     */
    public function setRoleName(int $role_name): void
    {
        $this->role_name = $role_name;
    }


}