<?php 

require "connexion.php";

$query = $db->prepare("UPDATE users SET id = :id, username = :username, email = :email, job = :job WHERE id = :id");
$parameters = [
    'id' => $_GET['user'],
    'username' => $_POST['name'],
    'email' => $_POST['email'],
    'job' => $_POST['job']
];

$query->execute($parameters);
$users = $query->fetch(PDO::FETCH_ASSOC);

header("Location: ../index.php");

?>