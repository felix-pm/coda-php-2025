<?php
    $username = $_GET["username"];
    if($username === "")
    {
        $username = "Anonyme";
    }
    echo $username;
?>