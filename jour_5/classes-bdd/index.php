<?php
require "user.php";
require "connexion.php";

// $superman = [
// 	"first_name" => "Clark",
// 	"last_name" => "Kent",
// 	"email" => "clark.kent@test.fr"
// ];

// $user = new user();

// $user->setFirstName($superman['first_name']);
// $user->setLastName($superman['last_name']);
// $user->setEmail($superman['email']);

$query = $db->prepare("SELECT * FROM users WHERE id = 1");
$query->execute();
$resultat = $query->fetch(PDO::FETCH_ASSOC);

$user = new user();

$user->setFirstName($resultat['first_name']);
$user->setLastName($resultat['last_name']);
$user->setEmail($resultat['email']);


// ----------------------------------------



// Étape 5 :
$query = $db->prepare("SELECT * FROM users");
$query->execute();
$resultat = $query->fetchAll(PDO::FETCH_ASSOC);

$users = [];

foreach($resultat as $item){
    $perso = new user();
    $item->setFirstName($resultat['first_name']);
    $item->setLastName($resultat['last_name']);
    $item->setEmail($resultat['email']
    );
    $perso->setId($item['id']);
    $users[] = $perso;
}






?>