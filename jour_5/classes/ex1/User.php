<?php
class User {

    public function __construct(private int $Id, private string $Username, private string $Password)
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