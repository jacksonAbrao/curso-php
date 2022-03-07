<?php

    class Humano{
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante(){
            echo self::BRACOS . "<br>";
        }

    }

    $jackson = new Humano;
    echo Humano::OLHOS . "<br>";

    $jackson->mostrarConstante();