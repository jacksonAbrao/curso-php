<?php
    class Car{
        public $rodas = 4;
        private $vidro = "sem película";
        protected $portas = "4";


        public function getVidro(){
           return $this->vidro;
        }

        public function peliculaDeFabrica($pelicula){
            $this->vidro = $pelicula;
        }

        public function getPortas(){
            return $this->portas;
        }
    }

    class Mecanico {
        public function alterarRodas($carro){
            $carro->rodas = 10;
        }

        public function colocarPelilula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car();

    echo $carro->rodas . "<br>";

    $jackson = new Mecanico();
    $jackson->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    // não pode alterar pois é privado
    //$jackson->colocarPelilula($carro, "com película");

    $carro->peliculaDeFabrica("com película");

    echo $carro->getVidro() . "<br>";

    echo $carro->getPortas() . "<br>";