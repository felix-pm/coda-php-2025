<?php

class Team{
    public function __construct(private int $Team_id, private string $name, private string $description, private ?Media $logo)
    {
        
    }

    public function getTeam_id() :int
    {
        return $this->Team_id;
    }

    public function getname() :string
    {
        return $this->name;
    }

    public function getdescription() :string
    {
        return $this->description;
    }

    public function getlogo() :Media
    {
        return $this->logo;
    }


}