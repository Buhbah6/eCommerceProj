<?php
    namespace app\controllers;

        class Reviews extends \app\core\Controller { //DO CHECKS -> USER VALIDATION

            //shows publications page -> publication title and user associated to it and timestamp
            //format: publication_title by username at timestamp
            public function index($product_id) { 
                $myReviews = new \app\models\Reviews();
                $reviews = $myReviews->getAllReviews($product_id);
                $this->view('Reviews/index', $reviews);
            }

            public function create($product_id) {
                if (!isset($_POST['action'])) { 
                    $this->view('Reviews/create');
                }
                else {  
                    $review = new \app\models\Reviews();
                    $review->user_id = $_SESSION['user_id'];
                    $review->product_id = $product_id;
                    $review->review_content = $_POST['review_content'];
                    $review->insert();
                    header("location:/Reviews/index/$product_id");
                }
            }

            public function update($review_id) {
                $review = new \app\models\Reviews();
                $review = $review->getReview($review_id);
                if (!isset($_POST['action'])) {
                    $this->view('Reviews/update', $review->review_id);
                }
                else {
                    $review->review_content = $_POST['review_content'];
                    $review->update($review->review_id);
                    $reviews = $review->getAllReviews($review->product_id);
                    $this->view('Reviews/index', $reviews);

                    // header("location:/Reviews/index/$review->product_id");
                }
            }

            public function delete($review_id) {
                $review = new \app\models\Reviews();
                $review = $review->getReview($review_id);
                $review->delete($review_id); //only if belongs to specific person (must be logged in)
                header("location:/Reviews/index/$review->product_id");
            }
        }