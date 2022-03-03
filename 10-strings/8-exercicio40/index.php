<?php
    $text = "O rato roeu a roupa do rei de Roma";

    $contador = 0;

    for ($i = 0; $i < strlen($text); $i++) {
        if($text[$i] === "a"){
            $contador++;
        }
    }
    
    echo "A letra 'a' aparece $contador vezes <br>";