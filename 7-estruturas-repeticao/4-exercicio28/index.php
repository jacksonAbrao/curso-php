<?php

    $x = 4;

    while($x <= 30){

        echo "$x <br>";

        if($x === 24){
            echo "termina aqui o contador";
            break;
        }

        $x += 2;
    }

