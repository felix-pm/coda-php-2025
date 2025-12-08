<?php

class MediaManager extends AbstractManager
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $query = $this->db->prepare('SELECT media.* FROM media');
        $parameters = [

        ];

        $query->execute($parameters);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            return new Media(
                $result["id"], 
                $result["url"], 
                $result["alt"]
            );
        }

        return $result;
    }
}


?>