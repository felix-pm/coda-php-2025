<?php

class AuthController extends AbstractController
{
    public function home() : void
    {
        $this->render('home/home.html.twig', []);
    }

    public function login() : void
    {
        if (!empty($_POST)) {
            if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword'])){
                $error = "Vos données ne sont pas toutes remplies !";
            }
            $manager = new UserManager();
            $users = $manager->findAll(); 
            foreach ($users as $user) {
                if ($user->getEmail() ==! $_POST['email']) {
                    $error = "Votre email est incorrect !";
                    break; 
                }
            }
            if (condition) {
                # code...
            }
        }
        $this->render('auth/login.html.twig', []);
    }

    public function logout() : void
    {
        session_destroy();
        $this->redirect('index.php');
    }

    public function register(): void
{
    $error = null;
    if (!empty($_POST)) {
        if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
            $error = "Vos données ne sont pas toutes remplies !";
        }
        elseif ($_POST['password'] !== $_POST['confirmPassword']) {
            $error = "Vos mots de passe ne sont pas identiques !";
        }
        else {
            $manager = new UserManager();
            $users = $manager->findAll(); 
            foreach ($users as $user) {
                if ($user->getEmail() === $_POST['email']) {
                    $error = "Votre email est déjà utilisé !";
                    break; 
                }
            }
        }
        if ($error === null) {
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $userToCreate = new User(
                $_POST['firstName'],
                $_POST['lastName'],
                $_POST['email'],
                $hashedPassword
            );
            $userToCreate->setRole("USER");
            $manager = new UserManager();
            $manager->create($userToCreate);
            $this->redirect('index.php?route=login');
            exit;
        }
    }
    $this->render('auth/register.html.twig', ['error' => $error]);
}

    public function notFound() : void
    {
        $this->render('error/notFound.html.twig', []);
    }
}