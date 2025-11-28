<?php
class Categorie {
    private array $posts = [];

    public function __construct(private int $Id, private string $title, private string $description)
    {

    }
    // id
    public function getId() : int
    {
        return $this->Id;
    }

    public function setId(string $Id) : void
    {
        $this->Id = $Id;
    }
    // title
    public function gettitle() : string
    {
        return $this->title;
    }

    public function settitle(string $title) : void
    {
        $this->title = $title;
    }
    // description
    public function getdescription() : string
    {
        return $this->description;
    }

    public function setdescription(string $description) : void
    {
        $this->description = $description;
    }

    // post


    public function addPost($post) : array
    {
        $this->posts[] = $post;
    	return $this->posts;
    }

    public function removePost($post) : array
    {
        foreach($this->posts as $key => $item)
    	{
    		if($item === $post)
    		{
    			unset($this->posts[$key]);
    		}
    	}

    	return $this->posts;
    }

    public function getFullInfocategorie(): string
    {
        return "L'id est : " . $this->Id
            . ", le titre est : " . $this->title
            . ", la description est : " . $this->description;
    }

    
    
}



?>