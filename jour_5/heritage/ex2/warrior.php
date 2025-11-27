<?php
require_once "Character.php";

class Warrior extends Character{

    public function __construct(int $life, string $name, private int $energy)
    {
        parent::__construct($life, $name);
        $this->energy = $energy;
    }

    // energy
    public function getenergy() : int
    {
        return $this->energy;
    }

    public function setenergy(int $energy) : void
    {
        $this->energy = $energy;
    }
}



?>