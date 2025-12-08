## GEMINI :

"Pourquoi mon if endif pose un problemes ?

<?php if($player->getNickname() === $_GET["name"])?>

                    <img src="<?= $player->getPortrait()->getUrl() ?>" alt="<?= $player->getPortrait()->getAlt() ?>">
                    <h2><?= $player->getNickname() ?></h2>
                    <a href="index.php?route=players">Découvrez <?= $player->getNickname() ?></a>
                <?php endif ?>

"
\-> il manquait les : après le if.
