<?php
    function alteraDados($nome, $idade){
        $nome = "Sr. " . $nome;
        $idade = "$idade anos";
        return [$nome, $idade];
    }

    $dados = alteraDados("Mario", 18);

    print_r($dados);

    echo "<br>";

    echo "Olá, {$dados[0]}! Você tem {$dados[1]}";