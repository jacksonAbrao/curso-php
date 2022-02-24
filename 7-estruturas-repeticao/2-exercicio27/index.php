<?php

    $teste = ["teste", 1, true, "testando", 3, 6, "testado", false, "qual foi", 5];
    $x = count($teste);
    $y = 0;

    while($y < $x){
        if(is_string($teste[$y])){
            echo $teste[$y] . "<br>";
        }

        $y ++;
    }