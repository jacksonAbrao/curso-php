<?php
    interface Caracteristicas{
        const nome = "Jackson";
        public function falar();
    }

    class Humano implements Caracteristicas{
        public $idade = 23;

        public function falar(){
            echo "Olá mundo! <br>";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::nome . "<br>";
        }
    }

    $jackson = new Humano;

    $jackson->falar();

    $jackson->dizerNome();