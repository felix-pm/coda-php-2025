<?php

class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        $users = [];
        
        foreach ($result as $row) {
            $user = new User();
            $user->setId($row['id']);
            $user->setFirstName($row['first_name']);
            $user->setLastName($row['last_name']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            
            $users[] = $user;
        }
        
        return $users;
    }

    public function findOne(int $id) : ?User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $user = new User();
            $user->setId($result['id']);
            $user->setFirstName($result['first_name']);
            $user->setLastName($result['last_name']);
            $user->setEmail($result['email']);
            $user->setPassword($result['password']);
            
            return $user;
        }

        return null;
    }

    public function create(User $user) : void
    {
        $query = $this->db->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
        
        $parameters = [
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ];
        
        $query->execute($parameters);
        
        $user->setId($this->db->lastInsertId());
    }

    public function update(User $user) : void
    {
        $query = $this->db->prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email, password = :password WHERE id = :id');
        
        $parameters = [
            'id' => $user->getId(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ];
        
        $query->execute($parameters);
    }

    public function delete(int $id) : void
    {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
    }
}