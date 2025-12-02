<?php

class AuthController extends AbstractController
{
    public function login(): void
    {
        if (!isset($_POST["email"])) {
            $this->render("login", []);
            return;
        }

        $email = $_POST["email"];
        var_dump($email);
    }

    public function notFound() : void
    {
        $this->render("notFound");
    }


}


?>