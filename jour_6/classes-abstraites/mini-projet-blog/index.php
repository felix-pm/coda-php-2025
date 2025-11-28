<?php
require "User.php";
require "categorie.php";
require "post.php";
require "UserManager.php"

$user = new User(1, "felix", "felix@gmail.com", "mdp", "member", new DateTime("2025-11-28 16:45:00"));
echo "{$user->getfullinfouser()}" . "<br>";

$categorie = new Categorie(1, "Les misérables", "un livre très interessant");
echo "{$categorie->getFullInfocategorie()}" . "<br>";

$post = new Post(1, "Post channel", "In the realm of intuitive web design, aesthetics p...", "contenu", "author", new DateTime("2025-11-28 16:45:00"));
echo "{$post->getFullInfopost()}" . "<br>";

echo "<br>";

$post->addCategory($categorie->gettitle());

$categorie->addPost($post);
echo "<br>";

var_dump($post);

echo "<br>";
echo "<br>";

var_dump($categorie);

?>