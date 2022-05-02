<?php
    namespace app\models;

        class Reviews extends \app\core\Model {

            function __construct() {
                parent::__construct();
            }

            public function getReview($review_id) {
                $SQL = 'SELECT * FROM review WHERE review_id = :review_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['review_id'=>$review_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Reviews");
                return $STMT->fetch(); 
            }

            public function get($product_id) { //all public and private publications (only if made by the same user)
                $SQL = 'SELECT * FROM review WHERE product_id = :product_id';

                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Reviews");
                return $STMT->fetchAll(); 
            }

            function getAllReviews($product_id) { 
                $SQL = 'SELECT * FROM review WHERE product_id = :product_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Reviews");
                return $STMT->fetchAll();
            }

            public function getContent($review_id) {
                
                $SQL = 'SELECT review_content FROM review WHERE review_id = :review_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['review_id'=>$review_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Reviews");
                return $STMT->fetch(); 
            }


            public function getUser($user_id) {
                $SQL = 'SELECT * FROM user WHERE user_id = :user_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['user_id'=>$user_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Reviews");
                return $STMT->fetch(); 
            }

            public function insert() { 
                $SQL = 'INSERT INTO review(user_id, product_id, review_content) 
                VALUES(:user_id, :product_id, :review_content)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['user_id'=>$this->user_id, 'product_id'=>$this->product_id, 
                'review_content'=>$this->review_content]);
            }
    
            public function update($review_id) {
                $SQL = 'UPDATE review SET review_content = :review_content WHERE review_id = :review_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['review_content'=>$this->review_content, 'review_id'=>$this->review_id]);
            }
    
            public function delete($review_id) {
                $SQL = 'DELETE FROM review WHERE review_id = :review_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['review_id'=>$review_id]);
            }
        }