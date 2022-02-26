<?php

$arr = [
    "carro" => 100000,
    "sofá" => 200,
    "cafeteira" => 50,
    "lapis" => 5,
];

function itensCaros($arr)
{
    $arrayRetorno = [];

    foreach($arr as $key => $value){
        if($value > 10){
            array_push($arrayRetorno, $key);
        }
    }

    return $arrayRetorno;
}

$novoArray = itensCaros($arr);

print_r($novoArray);