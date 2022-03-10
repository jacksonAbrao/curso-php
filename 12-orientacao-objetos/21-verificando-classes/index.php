<?php
    class Humano{
        public $idade;
        public $nome;
        public $profissao;

        public function falar(){}
        public function andar(){}
    }

    if(class_exists("Humano")){
        echo "A classe Humano existe <br>";
    }

    if(class_exists("Cachorro")){
        echo "A classe Cachorro existe <br>";
    } else {
        echo "A classe Cachorro não existe <br>";
    }

    print_r(get_class_vars("Humano")) . "<br>";
    print_r(get_class_methods("Humano")) . "<br>";