<?php

class Player_performance
{

    public function __construct(private int $id, private Player $player, private Game $game, private int $points, private int $assists)
    {

    }
 
    public function getId()
    {
        return $this->id;
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function getGame(): Game
    {
        return $this->game;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function getAssists()
    {
        return $this->assists;
    }

}