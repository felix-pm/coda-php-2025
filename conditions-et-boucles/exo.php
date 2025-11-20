<?php
    echo 'Exercice 1: <br>';
    $animals = ["Chat", "Chien", "Lapin", "Souris"];
    $i = 0;
    while($i < count($animals))
    {
        echo "{$animals[$i]} <br>";
        $i++;
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo 'Exercice 2: <br>';
    $numbers = [28, 32, 44, -67, 18, 24, -98];
    $i = 0;
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

    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo 'Exercice 3: <br>';
?>