<?php

class Player_performanceManager extends AbstractManager
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT player_performance.*, players.*,games.*,teams.name AS teams_name,teams.description,teams.id  FROM player_performance 
        JOIN players ON player_performance.player = players.id        
        JOIN teams ON players.team=teams.id
        JOIN games ON player_performance.game = games.id');
        $parameters = [
        
        ];

        $query->execute($parameters);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        $performance = [];

        foreach($results as $result) {            

            $team = new Team(
                $result['id'],
                $result['teams_name'],
                $result['description'],
                null 
            );

            $game= new Game(
                $result['id'],
                $result['name'],
                $result['date'],
                null,
                null,
                $result['winner']

            );
            

            $player= new Player(
                $result["id"],
                $result["nickname"], 
                $result["bio"],       
                null,
                $team         

            );
            $perf=new Player_performance(
                $result["id"],
                $player,
                $game,                               
                $result["points"],
                $result["assists"],
                
            );

            $performance[]=$perf;
        }

        return $performance;
    }

}

?>