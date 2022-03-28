<?php
include_once("templates/header.php");
//verifica se o usuário está autenticado
require_once("models/User.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);
$movieDao = new MovieDAO($conn, $BASE_URL);
$userMovies = $movieDao->getMoviesByUserId($userData->id);

// receber id do usuário
$id = filter_input(INPUT_GET, "id");

if (empty($id)) {
    if (!empty($userData)) {
        $id = $userData->id;
    } else {
        $message->setMessage("Usuário não encontrado!", "error", "index.php");
    }
} else {
    $user = $userDao->findById($id);
    // verifica se o usuário existe
    if (!$user) {
        $message->setMessage("Usuário não encontrado!", "error", "index.php");
    }
}

$fullName = $user->getFullName($userData);

if ($userData->image == "") {
    $userData->image = "user.png";
}

?>

<div id="main-container" class="container-fluid">
    <div class="col-md-8 offset-md-2">
        <div class="row profile-container">
            <div class="col-md-12">
                <h1 class="page-title"><?= $fullName ?></h1>
                <div id="profile-image-container" accept="image/png, image/jpg, image/jpeg" style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->image ?>')"></div>
                <h3 class="about-title">Sobre:</h3>
                <?php if(!empty($userData->bio)): ?>
                    <p class="profile-description"><?= $userData->bio ?></p>
                <?php else: ?>
                    <p class="profile-description">Nenhuma descrição para este usuário.</p>
                <?php endif; ?>
            </div>
            <div class="col-md-12 added-movies-container">
                <h3>Filmes que enviou:</h3>
                <?php foreach ($userMovies as $movie): ?>
                    <?php require("templates/movie_card.php"); ?>
                <?php endforeach; ?>
                <?php if(count($userMovies) === 0): ?>
                    <p class="empty-list">Nenhum filme enviado por este usuário.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include_once("templates/footer.php"); ?>