<?php

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $b = 0;

    while($b < count($arr)){

        $numAtual = $arr[$b];

        if($numAtual == 30 || $numAtual == 40){
            $b++;

            continue;
        }

        echo "array igual a $numAtual <br>";

        $b++;
    }