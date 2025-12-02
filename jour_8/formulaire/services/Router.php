<?php

class Router
{
    public function handleRequest() : void
    {
        if (!isset($_GET['path']) || empty($_GET['path'])) {
            $crtl = new AuthController();
            $crtl->login();
            return;
        }
        $crtl = new AuthController();
        $crtl->notFound();
    }
}
?>