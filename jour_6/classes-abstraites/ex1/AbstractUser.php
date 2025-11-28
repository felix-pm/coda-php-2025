<?php


abstract class AbstractUser
{
    protected ? int $id = NULL;
    protected string $username;
    protected string $password;
    protected string $role;

    public function __construct(string $username, string $password, string $role)
    {
        $this-> username = $username;
        $this-> password = $password;
        $this-> role = $role;
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

    // password
    public function getpassword() : string
    {
        return $this->password;
    }

    public function setpassword(string $password) : void
    {
        $this->password = $password;
    }

    // role
    public function getrole() : string
    {
        return $this->role;
    }

    public function setrole(string $role) : void
    {
        $this->role = $role;
    }

    public function getfullinfo() : string
    {
        return " L'id est : " . $this->id . ", il s'appel : " . $this->username . ", son mdp est : " . $this->password . ", et son rôle est : " . $this->role;
    }
}







?>