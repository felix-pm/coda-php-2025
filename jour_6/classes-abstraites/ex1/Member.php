<?php 

require "AbstractUser.php";

class Member extends AbstractUser{
    private array $favorites = [];

    public function __construct(string $username, string $password, string $biography) 
    {
        parent:: __construct($username, $password, "MEMBER");
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

    // biography
    public function getbiography() : string
    {
        return $this->biography;
    }

    public function setbiography(string $biography) : void
    {
        $this->biography = $biography;
    }
}





?>