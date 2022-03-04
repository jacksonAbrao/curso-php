<?php
    $arr = [
        "nome" => "João",
        "idade" => 20,
        "peso" => 80.5
    ];

    extract($arr);

    echo $nome;
    echo "<br>";
    echo $idade;
    echo "<br>";
    echo $peso;
    echo "<br>";