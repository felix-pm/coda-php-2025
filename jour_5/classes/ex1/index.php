<?php
require "User.php";

$user1 = new User(1, "admin", "admin");
$user2 = new User(2, "user", "user");

echo "{$user1->getId()} {$user1->getUsername()} {$user1->getPassword()}";
echo "<br>";
echo "{$user2->getId()} {$user2->getUsername()} {$user2->getPassword()}";

?>