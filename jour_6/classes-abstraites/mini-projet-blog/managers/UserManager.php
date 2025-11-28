<?php

require "AbstractManager.php"

class UserManager extends AbstractManager
{

    public function __construct(){
        paren::__construct();
    }

    public function findAll() : array
    {
        $query = $this->$db->prepare('SELECT * FROM users');
        $query->execute();
        $users = $query->fetchall(PDO::FETCH_ASSOC);
        $users_return = [];
        $user_temp = new User("temp","temp","temp","temp","temp");
        foreach ($users as $i => $user)
        {
            $user_temp->setId($user["id"]);
            $user_temp->setUsername($user["username"]);
            $user_temp->setPassword($user["password"]);
            $user_temp->setEmail($user["email"]);
            $user_temp->setRole($user["role"]);
            $user_temp->setTime($user["created_at"]);
            $users_return[] = $user_temp;
        }
        return $users_return;
    }

    public function findOne()  : ?User
    {
        $query = $this->$db->prepare('SELECT * FROM users WHERE id :id');
        $parameters = [
            ':id' => $id;
        ]
        $query->execute();
        $users = $query->fetchall(PDO::FETCH_ASSOC);
        $user_temp = new User("temp","temp","temp","temp","temp");
        if() 
        {
            return NULL;
        }
        else
        {
            $user_temp->setId($user["id"]);
            $user_temp->setUsername($user["username"]);
            $user_temp->setPassword($user["password"]);
            $user_temp->setEmail($user["email"]);
            $user_temp->setRole($user["role"]);
            $user_temp->setTime($user["created_at"]);
            $users_return[] = $user_temp;
        }
        return $users_return;
    }

    public function create() : void
    {
        
    }

    public function update() : void
    {
        
    }

    public function delete() : void
    {
        
    }













}

?>