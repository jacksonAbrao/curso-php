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

    // atualizar usuário
    if($type === "update") {
        $userData = $userDao->verifyToken();
        //resgata dados do usuário

        // recebe dados do post
        $name = filter_input(INPUT_POST, "name");
        $lastName = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $bio = filter_input(INPUT_POST, "bio");

        // criar um novo objeto de usuáio
        $user = new User();

        // preenche os dados do usuário
        $userData->name = $name;
        $userData->lastname = $lastName;
        $userData->email = $email;
        $userData->bio = $bio;

        //upload de imagem
        if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {

            $image = $_FILES["image"];

            //checagem de tipo de imagem
            if(in_array($image["type"], ["image/jpeg", "image/jpg", "image/png"])) {

                //checa se é jpg
                if(in_array($image["type"], ["image/jpeg", "image/jpg"])) {
                    $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                } else {
                    $imageFile = imagecreatefrompng($image["tmp_name"]);
                }

                $imageName = $user->generateImageName();

                imagejpeg($imageFile, "./img/users/" . $imageName, 100);

                $userData->image = $imageName;

            } else {
                $message->setMessage("imagem inválida, insira png ou jpg!", "error", "back");
            }
        }

        $userDao->update($userData);
            
    //atualizar senha do usuário
    } else if($type === "changepassword") {

        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
        $userData = $userDao->verifyToken();
        $id = $userData->id;

        if($password == $confirmpassword) {
            $user = new User();
            
            $finalPassword = $user->generatePassword($password);

            $user->password = $finalPassword;
            $user->id = $id;

            $userDao->changePassword($user);


        } else {
            $message->setMessage("As senhas não conferem!", "error", "back");
        }

    } else {
        $message->setMessage("informações inválidas!", "error", "index.php");
    }