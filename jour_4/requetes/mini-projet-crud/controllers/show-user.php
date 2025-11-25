<?php 

require "connexion.php";

$query = $db->prepare("SELECT users.id, username, email, jobs.name FROM users JOIN jobs ON users.job=jobs.id WHERE users.id = :id");
$parameters = [
    'id' => $_GET['user']
];

$query->execute($parameters);
$users = $query->fetch(PDO::FETCH_ASSOC);

// header("Location: ../index.php");

?>