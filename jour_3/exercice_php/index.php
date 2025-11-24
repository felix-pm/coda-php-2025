<?php

function routing() : string
{
    if (isset($_GET['route'])){
        $route = $_GET['route'];
        if($route === 'about')
        {
            return "about";
        }
        else if($route === 'contact')
        {
            return "contact";
        }
        else
        {
            return "homepage";
        }
    }
    return "homepage";
}


require "templates/layout.phtml";
?>
