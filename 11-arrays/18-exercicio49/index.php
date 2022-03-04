<?php
    // variavel com caracteristicas de um animal

    $raca = "Cão";
    $idade = 5;
    $peso = 10.5;
    $nome = "Bolinha";
    $cor = "Preto";
    $sexo = "M";

    $cao = compact("raca", "idade", "peso", "nome", "cor", "sexo");

    foreach($cao as $chave => $valor){
        echo $chave . ": " . $valor . "<br>";
    }