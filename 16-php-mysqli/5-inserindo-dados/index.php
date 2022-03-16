<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $con = new mysqli($host, $user, $pass, $db);


    $table = "itens";
    $nome = "Xícara";
    $descricao = "Xícara de café";

    $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $con->query($q);

    $con->close();