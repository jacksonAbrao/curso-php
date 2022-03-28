<?php
require_once("templates/header.php");
require_once("dao/MovieDAO.php");

$movieDao = new MovieDAO($conn, $BASE_URL);

$latestMovies = $movieDao->getLatestMovies();

$dramaMovies = $movieDao->getMoviesByCategory("Drama");

$actionMovies = $movieDao->getMoviesByCategory("Ação");
?>

<div id="main-container" class="container-fluid">
    <h2 class="section-title">Filmes novos</h2>
    <p class="section-description">Veja as críticas dos últimos filmes adicionados no MovieStar</p>
    <div class="movies-container">
        <?php foreach ($latestMovies as $movie) {
            require("templates/movie_card.php");
        } ?>
        <?php if (count($latestMovies) === 0) : ?>
            <p class="empty-list">Ainda não há nenhum filme cadastrado nesta categoria</p>
        <?php endif; ?>
    </div>
    <h2 class="section-title">Drama</h2>
    <p class="section-description">Veja os melhores filmes de drama no MovieStar</p>
    <div class="movies-container">
        <?php foreach ($dramaMovies as $movie) {
            require("templates/movie_card.php");
        } ?>
        <?php if (count($dramaMovies) === 0) : ?>
            <p class="empty-list">Ainda não há nenhum filme de drama cadastrado nesta categoria</p>
        <?php endif; ?>
    </div>
    <h2 class="section-title">Ação</h2>
    <p class="section-description">Veja os melhores filmes de ação no MovieStar</p>
    <div class="movies-container">
        <?php foreach ($actionMovies as $movie) {
            require("templates/movie_card.php");
        } ?>
        <?php if (count($actionMovies) === 0) : ?>
            <p class="empty-list">Ainda não há nenhum filme de ação cadastrado nesta categoria</p>
        <?php endif; ?>
    </div>
</div>

<?php include_once("templates/footer.php"); ?>