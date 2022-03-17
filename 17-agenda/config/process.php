<?php
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;
    // modificação do banco
    if(!empty($data)){

    //criar contato
        if($data["type"] == "create"){
            $name = $data["name"];
            $phone = $data["phone"];
            $email = $data["email"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, email, observations) VALUES (:name, :phone, :email, :observations)";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":observations", $observations);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        } else if($data["type"] === "edit") {
            $name = $data["name"];
            $phone = $data["phone"];
            $email = $data["email"];
            $observations = $data["observations"];
            $id = $data["id"];

            $query = "UPDATE contacts SET name = :name, phone = :phone, email = :email, observations = :observations WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }  else if($data["type"] === "delete") {
            $id = $data["id"];

            $query = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato excluído com sucesso!";
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }

        // redirect home
        header("Location: ".$BASE_URL . "/../index.php");

    //seleção de dados
    } else {
        $id;

        if (!empty($_GET)) {
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
    }

    // fechar conexão
    $conn = null;