<?php 
require "Character.php";

$perso1 = new Character("Ragnar");
$perso1->getweapon()->setname("Sword");
$perso1->getweapon()->setdomages(10);

echo "{$perso1->getname()} <br> {$perso1->getweapon()->getname()} <br> {$perso1->getweapon()->getdomages()}";


?>