<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $con = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM itens";

    $result = $con->query($sql);

    print_r($result);

    $con->close();