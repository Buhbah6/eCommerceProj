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

            public function getProductInCart($product_id) {
                $SQL = 'SELECT product_id FROM products_in_cart WHERE product_id = :product_id AND cart_id = :cart_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id, 'cart_id'=>$_SESSION['cart_id']]);
                return $STMT->fetch(); 
            }

            public function getAllProductsInCart() {
                $SQL = 'SELECT product_id FROM products_in_cart WHERE cart_id = :cart_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['cart_id'=>$_SESSION['cart_id']]);
                return $STMT->fetchAll(); 
            }

            public function getQuantityByProductId($product_id) {
                $SQL = 'SELECT quantity FROM products_in_cart WHERE product_id = :product_id AND cart_id = :cart_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id, 'cart_id'=>$_SESSION['cart_id']]);
                return $STMT->fetch(); 
            }

            public function insert() {
                $SQL = 'INSERT INTO cart(user_id) 
                VALUES(:user_id)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['user_id'=>$this->user_id]);
            }

            public function addToCart($product_id) {
                $SQL = 'INSERT INTO products_in_cart(cart_id, product_id, quantity) 
                VALUES(:cart_id, :product_id, :quantity)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['cart_id'=>$_SESSION['cart_id'], 'product_id'=>$product_id, 'quantity'=> 1]);
            }

            public function removeFromCart($product_id) {
                $SQL = 'DELETE FROM products_in_cart WHERE product_id = :product_id AND cart_id = :cart_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id, 'cart_id'=>$_SESSION['cart_id']]);
            }

            public function modifyQuantity($product_id, $quantity) {
                $SQL = 'UPDATE products_in_cart SET quantity = :quantity WHERE product_id = :product_id AND cart_id = :cart_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['quantity'=>$quantity, 'product_id'=>$product_id, 'cart_id'=>$_SESSION['cart_id']]);
            }
        }