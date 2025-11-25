<?php 

require "connexion.php";

$query = $db->prepare("INSERT INTO users (id, username, email, job) VALUES (NULL, :name, :email, :job)");
$parameters = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'job' => $_POST['job']
];
$query->execute($parameters);
$users = $query->fetchAll(PDO::FETCH_ASSOC);

header("Location: ../index.php");
exit;

?>