<?php
require "Character.php";

$Character = new Character(1);

echo "{$Character->getFullName()}";

echo "<br>";

$Character->setfirstName("Sarah");
$Character->setlastName("Connor");
echo "{$Character->getFullName()}";

?>