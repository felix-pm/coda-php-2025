<?php
class User {
    private ? int $Id = null;
    private string $firstName = "Jane";
    private string $lastName = "Doe";

    public function __construct()
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
    public function getUsername() : string
    {
        return $this->Username;
    }

    public function setUsername(string $Username) : void
    {
        $this->Username = $Username;
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
}



?>