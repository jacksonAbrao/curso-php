<?php

    $arr = [];
    $tamanho = 20;

    for ($i = 10; $i <= $tamanho; $i++) {
        array_push($arr, $i);
    }
    
    for($i=1; $i < count($arr); $i++){
        if(($arr[$i]%2) != 0){
            echo "imprimindo o número $arr[$i] por ser impar <br>";
        }
    }