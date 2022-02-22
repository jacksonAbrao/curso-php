<?php

    $a = "teste";
    $b = 3.3;

    if(is_float($a)){ //false
        echo "A variável $a é do tipo float <br>";
    }

    if(is_float($b)){ //true
        echo "A variável $b é do tipo float <br>";
    }