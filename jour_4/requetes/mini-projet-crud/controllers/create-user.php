<?php 

require "controllers/connexions.php"

$query = $db->prepare("INSERT INTO users (id, username, email) VALUES (NULL, :username, :email, :job)");
$parameters = [
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'job' => $_POST['job']
];
$query->execute($parameters);
$users = $query->fetchAll(PDO::FETCH_ASSOC);


?>