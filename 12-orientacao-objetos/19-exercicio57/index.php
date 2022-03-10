<?php
    class Cachorro{
        public $nome;
        public $raca;
        public $idade;

        function __construct($nome, $raca, $idade){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->idade = $idade;
        }
    }

    $cachorro = new Cachorro("Rex", "Vira-lata", 3);

    echo "O cachorro {$cachorro->nome} é da raça {$cachorro->raca} e tem {$cachorro->idade} anos <br>";