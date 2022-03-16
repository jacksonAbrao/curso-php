<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $nome = "Suporte";
    $descricao = "Suporte para notebook";

    $stmt->bindParam("nome", $nome);
    $stmt->bindParam("descricao", $descricao);

    $stmt->execute();