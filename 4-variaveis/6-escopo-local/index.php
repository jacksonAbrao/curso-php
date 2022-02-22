<?php

    $x = 10;

    echo "$x local <br>";

    function teste() {
        $x = 5;

        echo "$x local <br>";
    }


    function testando(){
        $x = 30;
        echo "$x local 2 <br>";

    }

    teste();

    testando();

    echo "$x local <br>";