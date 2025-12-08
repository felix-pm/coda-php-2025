<?php

class TeamManager extends AbstractManager
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $query = $this->db->prepare('SELECT teams.*, media.* FROM teams JOIN media ON teams.logo=media.id');
        

        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        $team1=[];

        foreach ($results as $result) {

            $media= new Media(                
                $result["id"],
                $result["url"],
                $result["alt"]
            );
            
            $team= new Team(
                $result["id"],
                $result["name"],
                $result["description"],
                $media
            );

             $team1[] = $team;
        }          
        

        return $team1;
    }
}



?>