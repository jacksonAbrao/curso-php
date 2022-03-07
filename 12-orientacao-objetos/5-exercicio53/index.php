<?php
    class Cachorro{
        function latir(){
            echo "Au au!" . "<br>";
        }
        function andar($m){
            echo "ele andou $m metros" . "<br>";
        }
    }

    $athena = new Cachorro;
    $athena->latir();
    $athena->andar(200);

    $spike = new Cachorro;
    $spike->latir();
    $spike->andar(100);