<?php

if(isset($_GET["route"]))
{
    if($_GET['route']==="delete")
    {
        header ("Location: controllers/delete.php?user=".$_GET['user']);
    }
    $route = $_GET["route"];
}
else
{
    $route = "list";
}

require "templates/layout.phtml";

?>
