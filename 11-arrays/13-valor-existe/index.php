<?php
    $arr = [
        "nome" => "João",
        "idade" => 20,
        "peso" => 80.5
    ];

    if (array_key_exists("nome", $arr)) {
        echo "O nome existe no array";
    } else {
        echo "O nome não existe no array";
    }

    if (array_key_exists("profissao", $arr)) {
        echo "A profissao existe no array";
    } else {
        echo "A profissao não existe no array";
    }

    //isset também quer dizer se existe