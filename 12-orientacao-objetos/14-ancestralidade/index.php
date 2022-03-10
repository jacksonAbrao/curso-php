<?php

    class Humano {

    }

    class Animal {

    }

    class Programador extends Humano {

    }

    $jackson = new Humano;

    $tuca = new Animal;

    $jose = new Programador;

    if ($jackson instanceof Humano){
        echo "Jackson é um Humano <br>";
    } else {
        echo "Jackson não é um Humano <br>";
    }

    if ($tuca instanceof Humano){
        echo "Tuca é um Humano <br>";
    } else {
        echo "Tuca não é um Humano <br>";
    }

    if ($jose instanceof Humano) {
        echo "Jose é um Humano <br>";
    } else {
        echo "Jose não é um Humano <br>";
    }

    if ($jose instanceof Programador){
        echo "Jose é um Programador <br>";
    } else {
        echo "Jose não é um Programador <br>";
    }
