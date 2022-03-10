<?php
    class Car{
        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca){
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }

    $ferrari = new Car(2, "Vermelho", "Ferrari");

    echo "O carro é da marca {$ferrari->marca} e tem {$ferrari->portas} portas <br>";

    $bmw = new Car(4, "Branco", "BMW");

    echo "O carro é da marca {$bmw->marca} e tem {$bmw->portas} portas <br>";