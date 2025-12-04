<?php

require "AbstractManager.php"

class UserManager
{    
    public function __construct(){
        $this->db = $db;
    }

    public function create(User $user) : user
    {
        $query = $this->db->prepare('INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)');
        
        $parameters = [
            'firstname' => $user->getfirsTname(),
            'lastname' => $user->getlastName(),
            'email'    => $user->getemail(),
            'password' => $user->getpassword()
        ];

        $query->execute($parameters);
        $results = $query->fetch(PDO::FETCH_ASSOC);
        
    }

    public function update(User $user) : User
    {
        $query = $this->db->prepare('UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email, password = :password WHERE id = :id');
        
        $parameters = [
            'id'        => $user->getid(),
            'firstname' => $user->getfirstName(),
            'lastname'  => $user->getlastName(),
            'email'     => $user->getemail(),
            'password'  => $user->getpassword()
        ];

        $query->execute($parameters);
        return $user;
    }

    public function delete(User $user) : void
    {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $user->getId()]);
    }

    public function findOne(int $id) : User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return new User(
                $result["firstname"], 
                $result["lastname"], 
                $result["email"], 
                $result["password"], 
                $result["id"]
            );
        }

        return null;
    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = [];

        foreach ($results as $result) {
            $users[] = new User(
                $result["firstname"], 
                $result["lastname"], 
                $result["email"], 
                $result["password"], 
                $result["id"]
            );
        }

        return $users;
    }
}

?>