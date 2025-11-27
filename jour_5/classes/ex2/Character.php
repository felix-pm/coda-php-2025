<?php
class Character {
    private string $firstName = "Jane";
    private string $lastName = "Doe";

    public function __construct(private int $Id)
    {
    
    }
    // id
    public function getId() : int
    {
        return $this->Id;
    }

    public function setId(int $Id) : void
    {
        $this->Id = $Id;
    }
    // firstName
    public function getfirstName() : string
    {
        return $this->firstName;
    }

    public function setfirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    // lastName
    public function getlastName() : string
    {
        return $this->lastName;
    }

    public function setlastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    // fullname
    public function getFullName() : string
    {
        return $this->firstName . " " . $this->lastName;
    }
}



?>