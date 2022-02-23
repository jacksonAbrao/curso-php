<?php

    $x = 70;
    $y = "teste";

    if(is_numeric($x)){
        $z = $x * 2;
        if($z > 100){
            echo "$z é maior que 100 <br>";
        }
        else {
            echo "$z não é maior que 100 <br>";
        }
    } else {
        echo "o valor atribuido não é um número";
    }