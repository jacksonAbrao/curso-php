<?php
    $str = "testando encontro palavra teste, em uma string teste";

    $pos = strrpos($str, "teste");

    echo $pos . "<br>";

    $palavra2 = "java";

    if (strrpos($str, $palavra2) !== false) {
        echo "A palavra $palavra2 foi encontrada na string $str";
    } else {
        echo "A palavra $palavra2 não foi encontrada na string $str";
    }