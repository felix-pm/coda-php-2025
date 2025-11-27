<?php
class Weapon {

    public function __construct(private string $name, private int $domages)
    {
    
    }
    // name weapon
    public function getname() : string
    {
        return $this->name;
    }

    public function setname(string $name) : void
    {
        $this->name = $name;
    }
    // domages weapon
    public function getdomages() : int
    {
        return $this->domages;
    }

    public function setdomages(int $domages) : void
    {
        $this->domages = $domages;
    }
    public function strike() : string
    {
        return "Mais aïeuh! <br>";
    }
}



?>