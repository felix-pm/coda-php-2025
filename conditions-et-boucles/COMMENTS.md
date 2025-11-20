## Exercice 2

```php
while($i < count($numbers))
    {
        if($numbers[$i] > 0)
        {
            $i++;
        }
        else
        {
            echo "{$numbers[$i]} <br>";
            $i++;
        }
    }
```

Tu peux gagner du temps et des lignes en lui disant simplement que tu ne veux afficher que si il est négatif mais que tu veux continuer à parcourir le tableau dans tous les cas : 

```php
while($i < count($numbers))
    {
        if($numbers[$i] < 0)
        {
            echo "{$numbers[$i]} <br>";
        }
        
        $i++;
    }
```
