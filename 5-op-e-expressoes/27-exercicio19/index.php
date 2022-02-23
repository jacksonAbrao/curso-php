<?php

    $a = (int) "testando";
    $b = (int) 12.9;
    $c = (int) true;
    $d = (int) [1,2,3];


    if(is_int($a)){
        echo "a função a é integer <br>";
    }
    if(is_int($b)){
        echo "a função b é integer <br>";
    }
    if(is_int($c)){
        echo "a função c é integer <br>";
    }
    if(is_int($d)){
        echo "a função d é integer <br>";
    }