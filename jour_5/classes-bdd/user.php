<?php
class User
{
    private int ? $id = NULL;
    private string $firstName;
    private string $lastName;
    private string $email;

    public function __construct(string $firstName, string $lastName, string $email)
    {
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

    // email
    public function getemail() : string
    {
        return $this->email;
    }

    public function setemail(string $email) : void
    {
        $this->email = $email;
    }

}


?>