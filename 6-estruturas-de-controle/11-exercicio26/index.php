<?php

    $vel = 50;
    $velMax = 40;

    if($vel < $velMax){
        echo "motorista está dentro do limite de velocidade";
    } else if ($vel == $velMax) {
    echo "motorista está no limite de velocidade";
    } else if ($vel > $velMax) {
        echo "motorista está sendo multado por ultrapassar o limite de velocidade";
    }