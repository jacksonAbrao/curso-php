<?php
    class Car {
        public $rodas = 4;
        public $aro = 20;
        public $cor = "Preto";

        function acelerar(){
            echo "Acelerando..." . "<br>";
        }
    }

    $ferrari = new Car;
    echo $ferrari->rodas . "<br>";
    echo $ferrari->aro . "<br>";
    $ferrari->cor = "Vermelho";
    echo $ferrari->cor . "<br>";

    $ferrari->acelerar();