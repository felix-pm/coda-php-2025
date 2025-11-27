<?php
require "weapon.php";

class Character {
    private string $name;
    private Weapon $weapon;


    public function __construct(string $name) 
    {
        $this->name = $name;
        $this->weapon = new Weapon("", 0);
    }

    // name
    public function getname() : string
    {
        return $this->name;
    }

    public function setname(string $name) : void
    {
        $this->name = $name;
    }
    // weapon
    public function getweapon() : weapon
    {
        return $this->weapon;
    }

    public function setweapon(weapon $weapon) : void
    {
        $this->weapon = $weapon;
    }
    
    public function fight()
    {
        return $this->getweapon()->strike();
    }
}



?>