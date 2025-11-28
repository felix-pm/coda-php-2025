<?php
class Post {
    private array $categories = [];

    public function __construct(private int $Id, private string $title, private string $excerpt, private string $content, private string $author, private Datetime $created_at)
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
    // excerpt
    public function getexcerpt() : string
    {
        return $this->excerpt;
    }

    public function setexcerpt(string $excerpt) : void
    {
        $this->excerpt = $excerpt;
    }
    // content
    public function getcontent() : string
    {
        return $this->content;
    }

    public function setcontent(int $content) : void
    {
        $this->content = $content;
    }
    // author
    public function getauthor() : string
    {
        return $this->author;
    }

    public function setauthor(int $author) : void
    {
        $this->author = $author;
    }
    // created_at
    public function getcreated_at() : string
    {
        return $this->created_at;
    }

    public function setcreated_at(int $created_at) : void
    {
        $this->created_at = $created_at;
    }

    // categories
    public function getcategories() : string
    {
        return $this->categories;
    }

    public function setcategories($categories) : void
    {
        $this->categories = $categories;
    }

    public function addCategory(string $category) : array
    {
        $this->categories[] = $category;
    	return $this->categories;
    }

    public function removeCategory(string $category) : array
    {
        foreach($this->categories as $key => $cat)
    	{
    		if($cat === $category)
    		{
    			unset($this->categories[$key]);
    		}
    	}

    	return $this->categories;
    }


    public function getFullInfopost(): string
    {
        return "L'id est : " . $this->Id
            . ", le titre est : " . $this->title
            . ", l'extrait est : " . $this->excerpt
            . ", le contenu est : " . $this->content
            . ", l'auteur est : " . $this->author
            . ", créé le : " . $this->created_at->format('Y-m-d H:i:s');
    }

}



?>