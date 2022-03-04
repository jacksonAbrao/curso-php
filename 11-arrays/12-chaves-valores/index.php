<?php
    $carro = [
        "marca" => "BMW",
        "modelo" => "320i",
        "cor" => "Preto",
        "teto solar" => true,
        "motor" => 2.4
    ];

    $chaves = array_keys($carro);

    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro);

    print_r($valores);
    echo "<br>";