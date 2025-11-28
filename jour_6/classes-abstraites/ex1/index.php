<?php
require "Member.php";
require "Admin.php";

$member = new Member("felix", "motdepasse", "je suis un membre");
echo "{$member->getfullinfo()}" . "<br>";



$admin = new Admin("Gregoire", "motdepasse2", "");
echo "{$admin->getfullinfo()}". "<br>";


$admin->changeMemberRole($member);


echo $member->getfullinfo() . "<br>";


$admin->changeMemberRole($member);


echo $member->getfullinfo();







// $character = new Character(10, "Gregoire");
// $warrior = new Warrior(5, "Nathan", 15);
// $mage = new Mage(12, "Hugo", 10);

// var_dump($character->introduce());
// echo "<br>";
// var_dump($warrior->introduce());
// echo "<br>";
// var_dump($mage->introduce());

// echo "<br>";
// echo $warrior->introduce() . ", j'ai " . $warrior->getlife() . " points de vie " . " et j'ai " . $warrior->getenergy() . " d'énergie.";
// echo "<br>";
// echo $mage->introduce() . ", j'ai " . $mage->getlife() . " points de vie " . " et j'ai " . $mage->getmana() . " de mana.";

?>