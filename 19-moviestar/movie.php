<?php
require_once("templates/header.php");

require_once("models/Movie.php");
require_once("dao/MovieDAO.php");
require_once("dao/ReviewDAO.php");

//Pegar o id do filme
$id = filter_input(INPUT_GET, "id");

$movie;

$movieDao = new MovieDAO($conn, $BASE_URL);
$reviewDao = new ReviewDAO($conn, $BASE_URL);

if (empty($id)) {
    $message->setMessage("Filme não encontrado!", "error", "index.php");
} else {
    $movie = $movieDao->findById($id);

    // verifica se o filme existe
    if (!$movie) {
        $message->setMessage("Filme não encontrado!", "error", "index.php");
    }
}

//checar se o filme é do usuáiro
$userOwnsMovie = false;

if (!empty($userData)) {
    if ($userData->id === $movie->users_id) {
        $userOwnsMovie = true;
    }

    $alreadyReviewed = $reviewDao->hasAlreadyReviewed($id, $userData->id);
}

//checar se o filme tem imagem
if (empty($movie->image)) {
    $movie->image = "movie_cover.jpg";
}



//resgatar as reviews do filme
$movieReviews = $reviewDao->getMoviesReview($id);

?>
<div id="main-container" class="container-fluid">
    <div class="row">
        <div class="offset-md-1 col-md-6 movie-container">
            <h1 class="page-title"><?= $movie->title ?></h1>
            <p class="movie-details">
                <span>Duração: <?= $movie->length ?></span>
                <span class="pipe"></span>
                <span><?= $movie->category ?></span>
                <span class="pipe"></span>
                <span><i class="fas fa-star"></i> <?= $movie->rating ?></span>
            </p>
            <iframe src="<?= $movie->trailer ?>" width="560" height="315" frameborder="0" allow="accelerometer; auotplay; clipboard-write; encryted-media; gyroscope;picture-in-picture" allowfullscreen></iframe>
            <p><?= $movie->description ?></p>
        </div>
        <div class="col-md-4">
            <div class="movie-image-container" style="background-image: url('<?= $BASE_URL ?>img/movies/<?= $movie->image ?>')"></div>
        </div>
        <div class="offset-md-1 col-md-10" id="reviews-container">
            <h3 id="reviews-title">Avaliações:</h3>
            <!-- verifica se habilita a review para o usuário ou não -->
            <?php if (!empty($userData) && !$userOwnsMovie && !$alreadyReviewed) : ?>
                <div class="col-md-12" id="review-form-container">
                    <h4>Envie sua avaliação:</h4>
                    <p class="page-description">Preencha o formulário com sua avaliação com a nota e comentário sobre o filme </p>
                    <form action="<?= $BASE_URL ?>review_process.php" id="review-form" method="POST">
                        <input type="hidden" name="type" value="create">
                        <input type="hidden" name="movies_id" value="<?= $movie->id ?>">
                        <div class="form-group">
                            <!-- <label for="rating">Nota:</label>
                            <select name="rating" id="rating" class="form-control">
                                <option value="" selected>Selecione uma nota</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select> -->

                            <div class="form-group">
                                <fieldset class="rating" id="rating">
                                    <input type="radio" name="rating_1" value="5"><label class="full" for="rating_1"></label>
                                    <input type="radio" name="rating_2" value="4"><label class="full" for="rating_2"></label>
                                    <input type="radio" name="rating_3" value="3"><label class="full" for="rating_3"></label>
                                    <input type="radio" name="rating_4" value="2"><label class="full" for="rating_4"></label>
                                    <input type="radio" name="rating_5" value="1"><label class="full" for="rating_5"></label>
                                </fieldset>
                                <br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="review">Comentário:</label>
                            <textarea name="review" id="review" class="form-control" rows="3" placeholder="O que você achou do filme?"></textarea>
                        </div>
                        <button type="submit" class="btn card-btn">Enviar comentário</button>
                    </form>
                </div>
            <?php endif; ?>
            <!-- Comentários -->
            <?php foreach ($movieReviews as $review) : ?>
                <?php require("templates/user_review.php"); ?>
            <?php endforeach; ?>
            <?php if (count($movieReviews) == 0) : ?>
                <p class="empty-list">Nenhuma avaliação encontrada</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<script>
    $("label").click(function() {
        $(this).parent().find("label").css("background-color", "#ccc");
        $(this).css("background-color", "#ffd109");
        $(this).nextAll().css("background-color", "#ffd109");
    });
</script>

<?php require_once("templates/footer.php"); ?>