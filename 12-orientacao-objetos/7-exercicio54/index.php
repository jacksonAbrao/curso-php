<?php
    class Pessoa{
        public $nome = "Jackson";
        public $idade = "23";

        function andar($m){
            echo "ele andou $m metros" . "<br>";
        }
    }

    $Jackson = new Pessoa;
    echo "O nome dele é " . $Jackson->nome . " e tem " . $Jackson->idade . " anos" . "<br>";
    $Jackson->andar(200);
