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





?>