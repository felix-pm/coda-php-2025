<?php
require "reader.php";

$reader1 = new Reader("reader1@gmail.com", "reader1");
$reader1->addBookToFavorites("Les misérables");
$tab = $reader1->addBookToFavorites("Les 100");
var_dump($tab);



?>