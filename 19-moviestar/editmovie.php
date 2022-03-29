<?php
include_once("templates/header.php");
//verifica se o usuário está autenticado
require_once("models/User.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");


$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

$movieDao = new MovieDAO($conn, $BASE_URL);

$id = filter_input(INPUT_GET, "id");

if (empty($id)) {
    $message->setMessage("Filme não encontrado!", "error", "index.php");
} else {
    $movie = $movieDao->findById($id);

    // verifica se o filme existe
    if (!$movie) {
        $message->setMessage("Filme não encontrado!", "error", "index.php");
    }
}

// checa se o filme tem imagem
if ($movie->image == "") {
    $movie->image = "movie_cover.jpg";
}

?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <h1><?= $movie->title ?></h1>
                <p class="page-description">Altere os dados do filme no formulário abaixo:</p>
                <form id="edit-movie-form" action="<?= $BASE_URL ?>movie_process.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $movie->id ?>">
                    <input type="hidden" name="type" value="update">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $movie->title ?>">
                    </div>
                    <div class="form-group">
                        <label for="length">Duração</label>
                        <input type="text" class="form-control" id="length" name="length" value="<?= $movie->length ?>">
                    </div>
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select name="category" id="category" class="form-control">
                            <option value="">Selecione uma categoria</option>
                            <option value="Ação" <?= $movie->category === "Ação" ? "selected" : "" ?>>Ação</option>
                            <option value="Aventura" <?= $movie->category === "Aventura" ? "selected" : "" ?>>Aventura</option>
                            <option value="Comédia" <?= $movie->category === "Comédia" ? "selected" : "" ?>>Comédia</option>
                            <option value="Drama" <?= $movie->category === "Drama" ? "selected" : "" ?>>Drama</option>
                            <option value="Ficção" <?= $movie->category === "Ficção" ? "selected" : "" ?>>Ficção</option>
                            <option value="Terror" <?= $movie->category === "Terror" ? "selected" : "" ?>>Terror</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="trailer">Trailer</label>
                        <input type="text" class="form-control" id="trailer" name="trailer" value="<?= $movie->trailer ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Imagem</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <textarea class="form-control" id="description" name="description" rows="3"><?= $movie->description ?></textarea>
                    </div>
                    <button type="submit" class="btn card-btn">Salvar</button>
                </form>
            </div>
            <div class="col-md-3">
                <div class="movie-image-container" style="background-image: url('<?= $BASE_URL ?>img/movies/<?= $movie->image ?>') ; width: 100%; height: 100%">

                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("templates/footer.php"); ?>