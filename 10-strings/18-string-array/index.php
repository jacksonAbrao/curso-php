<?php
    $str = "testando o explode";

    $str_array = explode(" ", $str);

    print_r($str_array);
    echo "<br>";

    $fraseb = "carro, aviao, barco, onibus";
    $frasebExplod = explode(",", $fraseb);

    print_r($frasebExplod);

    echo "<br>";

    for($i = 0; $i < count($frasebExplod); $i++){
        echo $frasebExplod[$i] . "<br>";
    }