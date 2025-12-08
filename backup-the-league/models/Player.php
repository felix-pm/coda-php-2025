<?php

class Player
{
    public function __construct(
        private int $id,
        private string $nickname,
        private string $bio,
        private ?Media $portrait,
        private Team $team 
    ) {
    }


    public function getId(): int { 
        return $this->id; 
    }
    public function getNickname(): string {
         return $this->nickname; 
    }
    public function getBio(): string {
         return $this->bio; 
    }
    
    public function getPortrait(): Media {
         return $this->portrait; 
    }
    public function getTeam(): Team {
         return $this->team; 
    }
}
?>