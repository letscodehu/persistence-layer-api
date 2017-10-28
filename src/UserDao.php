<?php


interface UserDao
{
    /**
     * Finds a User by it's ID.
     * @param $id
     * @return User
     */
    public function findOne($id);
}