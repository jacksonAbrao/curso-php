<?php
    $pessoa = new Class(){
        public $nome = "João";

        public function dizerNome(){
            echo "Meu nome é {$this->nome} <br>";
        }
        
    };

    echo $pessoa->nome . "<br>";
    $pessoa->dizerNome();