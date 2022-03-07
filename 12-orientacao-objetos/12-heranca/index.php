<?php
    class Humano {
        public $idade = 23;

        public function falar(){
            echo "Olá mundo! <br>";
        }

        private function gritar(){
            echo "Gritando... <br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "Olá mundo sussurrando! <br>";
        }

        public function acessarFalarBaixinho(){
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano {
        public function programar(){
            echo "Estou programando! <br>";
        }
    }

    $ze = new Humano();

    $ze->falar();
    $ze->acessarGritar();
    $ze->acessarFalarBaixinho();

    $jackson = new Programador();

    echo $jackson->idade . "<br>";
    $jackson->falar();
    $jackson->programar();
    $jackson->acessarGritar();
    $jackson->acessarFalarBaixinho();
