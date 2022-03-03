<?php

    // não procura palavra completa, procura parte da palavra
    $str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

    $testeEncontrar = strpos($str, "strpos");

    if ($testeEncontrar !== false) {
        echo "Encontrou a string 'strpos'";
    } else {
        echo "Não encontrou a string 'strpos'";
    }

    echo $testeEncontrar . "<br>";