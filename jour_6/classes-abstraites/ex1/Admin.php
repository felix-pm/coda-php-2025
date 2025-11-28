<?php 

class Admin extends AbstractUser{

    public function __construct(string $username, string $password, string $biography) 
    {
        parent:: __construct($username, $password, "ADMIN");
    }

    public function changeMemberRole(Member $member) : void
    {
        if($member->getrole() === "MEMBER")
        {
            $member->setrole("PREMIUM_MEMBER");
        }
        else {
            $member->setrole("MEMBER");
        }
    }
}





?>