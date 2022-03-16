<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli($host, $user, $pass, $db);


    $nome = "Suporte de microfone";
    $descricao = "Suporte de microfone para o celular";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $descricao);

    $stmt->execute();

    $stmt->close();