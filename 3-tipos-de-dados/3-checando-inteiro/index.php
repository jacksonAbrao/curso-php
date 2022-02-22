<?php

    if(is_int(5)){ //true
        echo "É um inteiro 1 <br>";
    }

    if (is_int("teste")) { //false
        echo "É um inteiro 2 <br>";
    }

    $a = 10;

    if (is_int($a)) { //true
        echo "É um inteiro 3 <br>";
    }