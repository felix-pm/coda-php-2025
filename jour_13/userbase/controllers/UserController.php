<?php

class UserController extends AbstractController
{
    public function profile() :void
    {
        if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["email"]) && isset($_SESSION["role"]) && isset($_SESSION["id"]))
        {
            if($_SESSION["role"] === "ADMIN")
            {
                $this->redirect('index.php?route=list');
            }
            else
            {
                $this->render('member/profile.html.twig', []);
            }
        }
        else
        {
            $this->render('auth/login.html.twig', []);
        }
    }

    public function create() :void {
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'ADMIN') {
            $this->redirect('index.php?route=login');
        }
        else {
            $this->render('admin/users/create.html.twig', []);
        }
    }

    public function update(): void
    {
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'ADMIN') {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $userManager = new UserManager();
                $user = $userManager->findById($id);

                if ($user) {
                    if (!empty($_POST)) {
                        if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['role'])) {

                            $user->setFirstName($_POST['firstName']);
                            $user->setLastName($_POST['lastName']);
                            $user->setEmail($_POST['email']);
                            $user->setRole($_POST['role']);

                            if (!empty($_POST['password'])) {
                                $user->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
                            }

                            $userManager->update($user);
                            $this->redirect('index.php?route=list');
                        } else {
                            $this->render('admin/users/update.html.twig', ['user' => $user, 'error' => 'Veuillez remplir les champs obligatoires.']);
                        }
                    } else {
                        $this->render('admin/users/update.html.twig', ['user' => $user]);
                    }
                } else {
                    $this->redirect('index.php?route=list');
                }
            } else {
                $this->redirect('index.php?route=list');
            }
        } else {
            $this->redirect('index.php?route=login');
        }
    }

    public function delete(): void
    {
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'ADMIN') {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $userManager = new UserManager();
                $user = $userManager->findById($id);
                if ($user) {
                    $userManager->delete($user);
                }
            }
            $this->redirect('index.php?route=list');
        } else {
            $this->redirect('index.php?route=login');
        }
    }

    public function list() : void{
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'ADMIN') {
            $this->redirect('index.php?route=login');
            }
        else {
            $userManager = new UserManager();
            $users = $userManager->findAll();
            $this->render('admin/users/index.html.twig', ["users" => $users]);
        }
    }

    public function show() : void {
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'ADMIN') {
            $this->redirect('index.php?route=login');
            }
        else {
            $id = $_GET['id'];
            $userManager = new UserManager();
            $users = $userManager->findById($id);
            $this->render('admin/users/show.html.twig', ["users" => $users]);
        }
    }
}
