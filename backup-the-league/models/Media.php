<?php

class Media
{

    public function __construct(private int $id, private string $url, private string $alt)
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getAlt()
    {
        return $this->alt;
    }
}

?>