<?php 
$host = "localhost";
$port = "3306";
$dbname = "coda_bph_j5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

$query = $db->prepare("INSERT INTO users (id, username, email, job) VALUES (NULL, 'Batman', 'bruce@wayne.com', 3)");
$query->execute();
$user = $query->fetchall(PDO::FETCH_ASSOC);
var_dump($user);

?>