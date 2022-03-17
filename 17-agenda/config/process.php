<?php
    session_start();

    include_once("config/connection.php");
    include_once("config/url.php");

    $id;

    if(!empty($_GET)) {
        $id = $_GET["id"];
    }

    //retorna o dado de um contato
    if (!empty($id)) {
        
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {

        //retorna todos os contatos
        $contacts = [];
    
        $query = "SELECT * FROM contacts";
    
        $stmt = $conn->prepare($query);
    
        $stmt->execute();
        
        $contacts = $stmt->fetchAll();
    }