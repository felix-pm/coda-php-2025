<?php
    $nb = 42;
    echo $nb;

    $str = "La vie l'univers et tout le reste <br>";
    echo $str;

    $nbstr = $nb . $str;
    echo $nbstr;


    $nb_tab = [46, 4.9, 17];
    print_r($nb_tab);

    echo "<br>";

    $str_tab = ["coucou", "salut", "felix"];
    print_r($str_tab);

    echo "<br>";

    $animal = [
        "species" => "chat",
        "name" => "Curly", 
        "age" => 10
    ];
    print_r($animal);

    echo "<br>";

    $data = 42.1;
    echo $data;

    echo "<br>";

    $int = (int) $data;
    echo $int;

    echo "<br>";

    $str = (string) $int;
    echo $str;


?>

