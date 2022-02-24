<?php
    function velocidadeMaxima($vel) {
        if(is_int($vel)){
            echo "O carro atinge a velocidade máxima de $vel km/h <br>";
        } else {
            echo "Por favor, passe um número válido <br>";
        }
    
}

    velocidadeMaxima(200);

    $velocidade = 100;

    velocidadeMaxima($velocidade);
    velocidadeMaxima("teste");


    function descreverAnimal($nome, $raca){
        echo "O $nome é da $raca <br>";
    }

    descreverAnimal("Atena", "Rottweiler");