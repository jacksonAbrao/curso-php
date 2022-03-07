<?php

    class Pessoa {
        function falar(){
            echo "Oi, eu sou uma pessoa!" . "<br>";
        }

        function somar($num1, $num2){
            echo "Somando dois números: $num1 + $num2 = " . ($num1 + $num2) . "<br>";
        }
    }

    $jackson = new Pessoa;

    $jackson->falar();

    $joao = new Pessoa;

    $joao->somar(10, 20);
    $jackson->somar(10, 30);