<?php
include_once("templates/header.php");
//verifica se o usuário está autenticado
require_once("models/User.php");
require_once("dao/UserDAO.php");

$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);
?>

<div id="main-container" class="container-fluid">
    <div class="offset-md-4 col-md-4 new-movie-container">
        <h1 class="page-title">Adicionar Filme</h1>
        <p class="page-description">Adicione sua crítica e compartilhe com o mundo!</p>
        <form action="<?= $BASE_URL ?>movie_process.php" id="add-movie-form" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título do filme">
            </div>
            <div class="form-group">
                <label for="title">Imagem</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="length">Duração</label>
                <input type="text" class="form-control" id="length" name="length" placeholder="Duração do filme">
            </div>
            <div class="form-group">
                <label for="category">Categoria</label>
                <select name="category" id="category" class="form-control">
                    <option value="" selected>Selecione uma categoria</option>
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Drama">Drama</option>
                    <option value="Ficção">Ficção</option>
                    <option value="Terror">Terror</option>
                </select>
            </div>
            <div class="form-group">
                <label for="trailer">Trailer</label>
                <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Link do trailer">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Descreva o filme..."></textarea>
            </div>
            <button type="submit" class="btn card-btn">Adicionar</button>

        </form>

    </div>
</div>

<?php include_once("templates/footer.php"); ?>