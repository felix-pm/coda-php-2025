<?php

class GameManager extends AbstractManager {
    
    public function __construct(){
        parent::__construct();
    }

    public function findAll() : array {
        $sql = "SELECT 
                    games.id,
                    games.name,
                    games.date,
                    games.winner,
                    
                    team_1.id AS team_1_id,
                    team_1.name AS team_1_name,
                    team_1.description AS team_1_description,
                    media_1.url AS team_1_logo_url,
                    media_1.alt AS team_1_logo_alt,

                    team_2.id AS team_2_id,
                    team_2.name AS team_2_name,
                    team_2.description AS team_2_description,
                    media_2.url AS team_2_logo_url,
                    media_2.alt AS team_2_logo_alt

                FROM games
                JOIN teams AS team_1 ON games.team_1 = team_1.id
                JOIN media AS media_1 ON team_1.logo = media_1.id
                JOIN teams AS team_2 ON games.team_2 = team_2.id
                JOIN media AS media_2 ON team_2.logo = media_2.id
                ORDER BY games.id DESC";

        $query = $this->db->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        
        $gamesList = [];

        foreach ($results as $result) {
            $logo1 = new Media(0, $result['team_1_logo_url'], $result['team_1_logo_alt']);
            $team1 = new Team(
                $result['team_1_id'], 
                $result['team_1_name'], 
                $result['team_1_description'], 
                $logo1
            );

            $logo2 = new Media(0, $result['team_2_logo_url'], $result['team_2_logo_alt']);
            $team2 = new Team(
                $result['team_2_id'], 
                $result['team_2_name'], 
                $result['team_2_description'], 
                $logo2
            );

            $game = new Game(
                $result["id"], 
                $result["name"], 
                $result["date"], 
                $team1, 
                $team2, 
                $result["winner"]
            );
            
            $gamesList[] = $game;
        }
        
        return $gamesList;
    }
}
?>