<?php
    class Humano {
        public $idade = 23;
        public $nome = "Jackson";

        public function falar(){
            echo "Olá mundo! <br>";
        }
    }

    class Professor extends Humano {
        public function aula(){
            echo "Estou dando aula! <br>";
        }
    }

    $thalita = new Humano();
    $thalita->falar();

    $jackson = new Professor();
    $jackson->falar();
    $jackson->aula();