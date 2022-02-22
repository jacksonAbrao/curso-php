<?php

    class Pessoa {

        function falar(){
            echo "Olá pessoas";
        }
    }

    $jackson = new Pessoa();

    $jackson->nome = "Jackson";

    echo $jackson->nome;

    echo "<br>"; 

    echo $jackson->falar();