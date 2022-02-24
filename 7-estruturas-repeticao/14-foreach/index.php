<?php

    $arr = [];
    $tamanho = 20;

    for ($i = 1; $i <= $tamanho; $i++) {
        array_push($arr, $i);
    }

    foreach ($arr as $i) {
        echo "o indice atual é $i <br>";

        if($i == 14){
            echo "teste <br>";
            continue;
        }
    }