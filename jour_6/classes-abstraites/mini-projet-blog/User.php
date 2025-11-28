<?php
class User {

    public function __construct(private int $Id, private string $username, private string $email, private string $password, private string $role, private Datetime $created_at)
    {

    }
    // id
    public function getId() : int
    {
        return $this->Id;
    }

    public function setId(string $Id) : void
    {
        $this->Id = $Id;
    }
    // username
    public function getusername() : string
    {
        return $this->username;
    }

    public function setusername(string $username) : void
    {
        $this->username = $username;
    }
    // email
    public function getemail() : string
    {
        return $this->email;
    }

    public function setemail(string $email) : void
    {
        $this->email = $email;
    }
    // passworld
    public function getPassword() : string
    {
        return $this->Password;
    }

    public function setPassworld(int $Password) : void
    {
        $this->Password = $Password;
    }
    // role
    public function getrole() : string
    {
        return $this->role;
    }

    public function setrole(int $role) : void
    {
        $this->role = $role;
    }
    // created_at
    public function getcreated_at() : string
    {
        return $this->created_at;
    }

    public function setcreated_at(int $created_at) : void
    {
        $this->created_at = $created_at;
    }
    public function getFullInfouser(): string
    {
        return "L'id est : " . $this->Id
            . ", il s'appelle : " . $this->username
            . ", son email est : " . $this->email
            . ", son mot de passe est : " . $this->password
            . ", son rôle est : " . $this->role
            . ", créé le : " . $this->created_at->format('Y-m-d H:i:s');
    }
    
}



?>