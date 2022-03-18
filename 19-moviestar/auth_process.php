<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);

    // resgata o tipo do formulário
    $type = filter_input(INPUT_POST, "type");

    // verificação do tipo de formulário
    if ($type === "register") {
        // resgata os dados do formulário
        $name = filter_input(INPUT_POST, "name");
        $lastName = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmPassword = filter_input(INPUT_POST, "confirmPassword");

        // verificação de dados minimos
        if($name && $lastName && $email && $password) {
            if ($password === $confirmPassword) { // verificação de senha
                if ($userDao->findByEmail($email) === false) { // verificação de email
                    $user = new User();

                    // Criação de token e senha
                    $userToken = $user->generateToken();
                    $finalPassword = password_hash($password, PASSWORD_DEFAULT);
                } else {
                    $message->setMessage("E-mail já cadastrado!", "error", "back");
                }
            } else {
                $message->setMessage("As senhas não conferem!", "error", "back");
            }

        } else {
            // Enviar uma msg de erro, de dados que faltam
            $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
        }

    } else if ($type === "login") {

    }