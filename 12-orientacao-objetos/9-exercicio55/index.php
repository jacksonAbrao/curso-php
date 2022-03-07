<?php
    class Carro{
        public $marca;
        public $modelo;
        public $cor;
        public $velocidade_maxima;

        function setVelocidadeMaxima($velocidade_maxima){
            $this->velocidade_maxima = $velocidade_maxima . " km/h";
        }

        function getVelocidadeMaxima(){
            return $this->velocidade_maxima;
        }
    }

    $ferrari = new Carro;
    $ferrari->marca = "Ferrari";
    $ferrari->modelo = "F40";
    $ferrari->cor = "preta";
    $ferrari->setVelocidadeMaxima(330);

    echo $ferrari->getVelocidadeMaxima();