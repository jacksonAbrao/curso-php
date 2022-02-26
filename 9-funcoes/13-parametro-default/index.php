<?php
    // dá pra colocar valores por padrão, porém, é uma boa prática colocar eles por ultimo, por que, se não os torna obrigatórios

    function teste($a = "teste"){
        echo "O valor de a é $a <br>";
    }

    teste();
    teste("Outro valor");