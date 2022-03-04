<?php
    $marca = "Fiat";
    $modelo = "Uno";
    $ano = 2020;
    $placa = "ABC1234";
    $cor = "Branco";

    $carro = compact("marca", "modelo", "ano", "placa", "cor");

    print_r($carro);