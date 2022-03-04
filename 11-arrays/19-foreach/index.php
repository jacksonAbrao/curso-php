<?php
    $pessoa = [
        "nome" => "João",
        "idade" => 20,
        "peso" => 80.5
    ];

    foreach($pessoa as $chave => $valor){
        echo $chave . ": " . $valor . "<br>";
    }