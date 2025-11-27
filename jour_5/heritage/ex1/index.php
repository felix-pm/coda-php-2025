<?php
require "reader.php";

$reader1 = new Reader("reader1@gmail.com", "reader1");
$reader1->addBookToFavorites("Les misérables");
$tab = $reader1->addBookToFavorites("Les 100");
var_dump($tab);
echo "<br>";
$tab1 = $reader1->removeBookFromFavorites("Les 100");
var_dump($tab1);
echo "<br>";
$log = $reader1->login();
echo "Email : $log[login]";
echo "<br>";
echo "Mot de passe : $log[password]";


?>