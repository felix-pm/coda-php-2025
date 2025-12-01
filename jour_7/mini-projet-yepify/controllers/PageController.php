<?php

class PageController
{
    public function home()
    {
        require "templates/Accueil.phtml";
    }

    public function tarifs()
    {
        require "templates/Tarifs.phtml";
    }

    public function notFound()
    {
        require "templates/404.phtml";
    }
}