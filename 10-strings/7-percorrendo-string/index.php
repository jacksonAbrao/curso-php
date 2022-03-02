<?php
    $str= "Esta string e muito grande, com muitas letras";

    for($i = 0; $i < strlen($str); $i++){
        echo "$str[$i] <br>";
    }