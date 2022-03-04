<?php
    $pessoa = ["Jackson", 23, "Programador", "preto"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $cor) = $pessoa;

    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Profissão: $profissao <br>";
    echo "Cor: $cor <br>";