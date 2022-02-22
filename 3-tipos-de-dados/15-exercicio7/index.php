<?php
    $pessoa = [
        "nome" => "Jackson", 
        "idade" => 23, 
        "nacionalidade" => 
        "Brasileira", 
        "comidaFav" => "Hamburguer"
    ];

    $nome = $pessoa["nome"];
    $idade = $pessoa["idade"];
    $comidaFavorita = $pessoa["comidaFav"];

    if($pessoa["idade"]>18){
        echo "$nome é maior de idade <br>";
    }
    if ($idade > 18) {
        echo "$nome é maior de idade";
    }