<?php
class Router
{
    public function handleRequest() {
        // si j'ai reçu une route
        if(isset($_GET["route"]))
        {
            if($_GET["route"] === "a-propos")
            {
                $ctrl = new PageController();
                $ctrl->about();
            }
            elseif($_GET["route"] === "contact")
            {
                $ctrl = new PageController();
                $ctrl->contact();
            }
            else
            {
                $ctrl = new PageController();
                $ctrl->home();
            }
        }
        else
        {
            $ctrl = new PageController();
            $ctrl->notFound();
        }
    }
}