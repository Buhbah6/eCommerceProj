<?php
    namespace app\models;

        class Cart extends \app\core\Model {

            function __construct() {
                parent::__construct();
            }

            public function get($cart_id) {
                $SQL = 'SELECT * FROM cart WHERE cart_id = :cart_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['cart_id'=>$cart_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Cart");
                return $STMT->fetch(); 
            }

            public function getByUser($user_id) {
                $SQL = 'SELECT * FROM cart WHERE user_id = :user_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['user_id'=>$user_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Cart");
                return $STMT->fetch(); 
            }

            public function insert() { //fix this and subsequent calls
                $SQL = 'INSERT INTO cart(user_id, product_id, quantity) 
                VALUES(:user_id, :product_id, :quantity)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['user_id'=>$this->user_id, 'product_id'=>$this->product_id, 'quantity'=>$this->quantity]);
            }
    /*
            public function update() {
                $SQL = 'UPDATE cart SET publication_title = :publication_title, publication_text = :publication_text, 
                publication_status = :publication_status WHERE profile_id = :profile_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['publication_title'=>$this->publication_title, 'publication_text'=>$this->publication_text, 
                'publication_status'=>$this->publication_status, 'profile_id'=>$this->profile_id]);
            }
    
            public function delete($publication_id) {
                $SQL = 'DELETE FROM publication WHERE publication_id = :publication_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['publication_id'=>$publication_id]);
            }
            */
        }