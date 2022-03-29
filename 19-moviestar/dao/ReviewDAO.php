<?php

    require_once("models/Review.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");


    class ReviewDAO implements ReviewDAOInterface {
        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url) {
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
        }

        public function buildReview($data){
            $reviewObject = new Review();
            $reviewObject->id = $data['id'];
            $reviewObject->rating = $data['rating'];
            $reviewObject->review = $data['review'];
            $reviewObject->users_id = $data['users_id'];
            $reviewObject->movie_id = $data['movies_id'];
        }
        public function create(Review $review){

        }
        public function getMoviesReview($id){

        }
        public function hasMoviesReview($id, $user_id){

        }
        public function getRatings($id){

        }
    }