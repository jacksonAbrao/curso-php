<?php

    if (5 > 2 || 3 < 4) { //true e true
        echo "a primeira função é verdadeira <br>";
    }

    if (5 > 2 || 30 < 4) { //true e false
        echo "a segunda função é verdadeira <br>";
    }

    if (5 > 20 || 3 < 4) { //false e true
        echo "a terceira função é verdadeira <br>";
    }

    if (5 > 20 || 30 < 4) { //false e false
        echo "a quarta função é verdadeira <br>";
    }