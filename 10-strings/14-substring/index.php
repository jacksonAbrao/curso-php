<?php
    $str = "Esta é a minha string";

    $minha = substr($str, 10, 5);// string pai, indice inicial, comprimento da palavra

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "testando esta string abc";

    $novaString = substr($str2, 8); //pega todo o resto da string

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3); //omnite os dados finais

    echo $novaString2 . "<br>";