## GEMINI :

Pourquoi mon if endif pose un problemes ?
```php
<?php if($player->getNickname() === $_GET["name"])?>
    <img src="<?= $player->getPortrait()->getUrl() ?>" alt="<?= $player->getPortrait()->getAlt() ?>">
    <h2><?= $player->getNickname() ?></h2>
    <a href="index.php?route=players">Découvrez <?= $player->getNickname() ?></a>
<?php endif ?>
```


\-> il manquait les : après le if.

gemini m'a donné ça :

voici la requîtes sql qui me permet de récupérer des données d'une base de données. Ici je veux me concentrer sur la recuperation de la date, celle ci est récupérer sous la forme 'Y-m-d h:m:s' or moi je voudrai récupérer 'd/m/y' comment je peux faire ?
```sql
$sql = "SELECT
games.id,
games.name,
games.date,
games.winner,

                    team_1.id AS team_1_id,
                    team_1.name AS team_1_name,
                    team_1.description AS team_1_description,
                    media_1.url AS team_1_logo_url,
                    media_1.alt AS team_1_logo_alt,

                    team_2.id AS team_2_id,
                    team_2.name AS team_2_name,
                    team_2.description AS team_2_description,
                    media_2.url AS team_2_logo_url,
                    media_2.alt AS team_2_logo_alt

                FROM games
                JOIN teams AS team_1 ON games.team_1 = team_1.id
                JOIN media AS media_1 ON team_1.logo = media_1.id
                JOIN teams AS team_2 ON games.team_2 = team_2.id
                JOIN media AS media_2 ON team_2.logo = media_2.id
                ORDER BY games.id DESC";
```



\-> solution dans \_detail_matchs.phtml


// comment récuperer le joueur + son portrait + son équipe + le logo de son équipe

gemini m'a donné ça :
```sql
$sql = "SELECT 
                    players.id, 
                    players.nickname, 
                    players.bio,
                    
                    media_portrait.id AS portrait_id,
                    media_portrait.url AS portrait_url,
                    media_portrait.alt AS portrait_alt,
                    
                    teams.id AS team_id,
                    teams.name AS team_name,
                    teams.description AS team_description,
                    
                    media_logo.id AS logo_id,
                    media_logo.url AS logo_url,
                    media_logo.alt AS logo_alt
                
                FROM players
                JOIN media AS media_portrait ON players.portrait = media_portrait.id
                JOIN teams ON players.team = teams.id
                JOIN media AS media_logo ON teams.logo = media_logo.id";
```