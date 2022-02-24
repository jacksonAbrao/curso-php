<?php
    $a = 10;

    $b = 15;

    function testeEscopo(){
        $a = 5;
        global $b;
        echo "Escopo local de a: $a e $b <br>";
    }

    echo "Escopo local de a: $a <br>";

    testeEscopo();