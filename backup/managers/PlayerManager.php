<?php

class PlayerManager extends AbstractManager {

    public function __construct(){
        parent::__construct();
    }

    public function findAll() : array
    {
        // On récupère le joueur + son portrait + son équipe + le logo de son équipe
        $sql = "SELECT 
                    players.id, 
                    players.nickname, 
                    players.bio,
                    
                    media_portrait.id AS portrait_id,
                    media_portrait.url AS portrait_url,
                    media_portrait.alt AS portrait_alt,
                    
                    teams.id AS team_id,
                    teams.name AS team_name,
                    teams.description AS team_description,
                    
                    media_logo.id AS logo_id,
                    media_logo.url AS logo_url,
                    media_logo.alt AS logo_alt
                
                FROM players
                JOIN media AS media_portrait ON players.portrait = media_portrait.id
                JOIN teams ON players.team = teams.id
                JOIN media AS media_logo ON teams.logo = media_logo.id";

        $query = $this->db->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        $playersList = [];

        foreach ($results as $result) {
            
            $teamLogo = new Media(
                $result['logo_id'],
                $result['logo_url'],
                $result['logo_alt']
            );

            $team = new Team(
                $result['team_id'],
                $result['team_name'],
                $result['team_description'],
                $teamLogo 
            );

            $playerPortrait = new Media(
                $result['portrait_id'],
                $result['portrait_url'],
                $result['portrait_alt']
            );

            $player = new Player(
                $result['id'],
                $result['nickname'],
                $result['bio'],
                $playerPortrait,
                $team           
            );

            $playersList[] = $player;
        }

        return $playersList;
    }    

    public function findPlayer() 
    {
        $query =$this->db->prepare('SELECT players.* FROM players WHERE nickname = :name ');
        $parametres = [
            'name' => $_GET["name"]
        ];

        $query->execute($parametres);
        $results = $query->fetch(PDO::FETCH_ASSOC);
        
        return $results;
    }
}

?>