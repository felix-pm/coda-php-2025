<?php

class Character {
    protected int $life;
    protected string $name;

    public function __construct(int $life, string $name) 
    {
        $this->life = $life;
        $this->name = $name;
    }

    // life
    public function getlife() : int
    {
        return $this->life;
    }

    public function setlife(int $life) : void
    {
        $this->life = $life;
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

    public function introduce() : string
    {
        return "Bonjour je m'appel " . $this->getname();
    }

    
}



?>