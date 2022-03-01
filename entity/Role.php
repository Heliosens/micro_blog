<?php


class Role
{
    private int $id;
    private int $role_fk;
    private int $user_fk;

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
    public function getRoleFk(): int
    {
        return $this->role_fk;
    }

    /**
     * @param int $role_fk
     */
    public function setRoleFk(int $role_fk): void
    {
        $this->role_fk = $role_fk;
    }

    /**
     * @return int
     */
    public function getUserFk(): int
    {
        return $this->user_fk;
    }

    /**
     * @param int $user_fk
     */
    public function setUserFk(int $user_fk): void
    {
        $this->user_fk = $user_fk;
    }


}