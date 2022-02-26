<?php

    $lista = ["Arroz", "Feijão", "Batata", "Macarrão", "Cenoura", "Alface", "Oleo", "Azeite", "Manteiga", "Leite"];


    // function listaParaString($arr){

    //     $str = "Você levou estes itens do mercado: ";

    //     for($i = 0; $i < count($arr); $i++){            
    //         if($i + 1 == count($arr)){
    //             $str .= "$arr[$i].";
    //         } else {
    //             $str .= "$arr[$i], ";
    //         }

    //     }
    //     return $str;
    // }

    // echo listaParaString($lista);

    echo "Você levou estes itens do mercado: ".implode(", ", $lista).".";












    // function imprimeArray($arr){
    //     foreach($arr as $key => $value){
    //         echo "$key => $value, ";
    //     }
    // }

    // imprimeArray($arr);