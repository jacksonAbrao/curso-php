<?php

    $arr = [];
    $tamanho = 10;
    
    for ($i=1; $i <= $tamanho; $i++) { 
        array_push($arr, $i);
    }

    print_r($arr);