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
    $user = [
        "name" => "James",
        "age" => 28
    ];
    foreach($user as $key => $value)
    {
        echo "My $key is $value <br>";
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo 'Exercice 4: <br>';
    $users = [
        [
            "Prénom" => "Hugues",
            "Nom" => "Froger"
        ],
        [
            "Prénom" => "Mari",
            "Nom" => "Doucet"
        ]
    ];
    $i = 0;
    for($i=0;$i < count($users); $i++)
    {
        foreach($users[$i] as $key => $value)
        {
            echo "Mon $key est $value <br>";
        }
    }


?>