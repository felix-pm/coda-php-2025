<?php
require_once "Character.php";

class Mage extends Character{

    public function __construct(int $life, string $name, private int $mana)
    {
        parent::__construct($life, $name);
        $this->mana = $mana;
    }

    // mana
    public function getmana() : int
    {
        return $this->mana;
    }

    public function setmana(int $mana) : void
    {
        $this->mana = $mana;
    }
}


?>