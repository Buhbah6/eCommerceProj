<?php
    namespace app\models;

        class Sale extends \app\core\Model {

            function __construct() {
                parent::__construct();
            }

            public function get($sale_id) {
                $SQL = 'SELECT * FROM sale WHERE sale_id = :sale_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['sale_id'=>$sale_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Sale");
                return $STMT->fetch(); 
            }

            public function insert($seller_id, $user_id, $product_id, $quantity) {
                $SQL = 'INSERT INTO sale(seller_id, user_id, product_id, quantity) 
                VALUES(:seller_id, :user_id, :product_id, :quantity)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['seller_id'=>$seller_id, 'user_id'=>$user_id, 'product_id'=>$product_id, 'quantity'=>$quantity]);
            }

            public function getByUserId($user_id) {
                $SQL = 'SELECT * FROM sale WHERE user_id = :user_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['user_id'=>$user_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Sale");
                return $STMT->fetchAll(); 
            }

            public function getBySellerId($seller_id) {
                $SQL = 'SELECT * FROM sale WHERE seller_id = :seller_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['seller_id'=>$seller_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Sale");
                return $STMT->fetchAll(); 
            }

        }
?>