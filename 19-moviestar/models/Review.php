<?php

    class Review {
        public $id;
        public $rating;
        public $review;
        public $users_id;
        public $movie_id;
    }

    interface ReviewDAOInterface {

        public function buildReview($data);
        public function create(Review $review);
        public function getMoviesReview($id);
        public function hasMoviesReview($id, $user_id);
        public function getRatings($id);
    }