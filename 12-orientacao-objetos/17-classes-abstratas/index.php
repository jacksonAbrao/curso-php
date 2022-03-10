<?php
    abstract class Teste {
        public static function metodo1() {
            echo "Método 1";
        }

        abstract public function metodo2();
    }

    Teste::metodo1();

    class Teste2 extends Teste {
        public function metodo2() {
            echo "Método 2";
        }
    }

    $obj = new Teste2();
    $obj->metodo2();