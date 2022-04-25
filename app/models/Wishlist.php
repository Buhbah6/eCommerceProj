<?php
    namespace app\models;

        class Wishlist extends \app\core\Model {

            function __construct() {
                parent::__construct();
            }

            public function get($wishlist_id) {
                $SQL = 'SELECT * FROM wishlist WHERE wishlist_id = :wishlist_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['wishlist_id'=>$wishlist_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Wishlist");
                return $STMT->fetch(); 
            }

            public function getAll() {
                $SQL = 'SELECT * FROM wishlist';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Wishlist");
                return $STMT->fetchAll(); 
            }

            public function getByName($name) {
                $SQL = 'SELECT * FROM wishlist WHERE name = :name';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['name'=>$name]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Wishlist");
                return $STMT->fetch(); 
            }

            public function getProductInWishlist($product_id) {
                $SQL = 'SELECT product_id FROM products_in_wishlist WHERE product_id = :product_id AND wishlist_id = :wishlist_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id, 'wishlist_id'=>$this->wishlist_id]);
                return $STMT->fetch(); 
            }

            public function getAllProductsInWishlist($wishlist_id) {
                $SQL = 'SELECT product_id FROM products_in_wishlist WHERE wishlist_id = :wishlist_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['wishlist_id'=>$wishlist_id]);
                return $STMT->fetchAll(); 
            }

            public function getQuantityByProductId($product_id) {
                $SQL = 'SELECT quantity FROM products_in_wishlist WHERE product_id = :product_id AND wishlist_id = :wishlist_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id, 'wishlist_id'=>$this->wishlist_id]);
                return $STMT->fetch(); 
            }

            public function insert() {
                $SQL = 'INSERT INTO wishlist(user_id, name, description) VALUES(:user_id, :name, :description)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['user_id'=>$this->user_id, 'name'=>$this->name, 'description'=>$this->description]);
            }

            public function addToWishlist($product_id) {
                $SQL = 'INSERT INTO products_in_wishlist(wishlist_id, product_id, quantity) 
                VALUES(:wishlist_id, :product_id, :quantity)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['wishlist_id'=>$this->wishlist_id, 'product_id'=>$product_id, 'quantity'=> 1]);
            }

            public function removeFromWishlist($product_id) {
                $SQL = 'DELETE FROM products_in_wishlist WHERE product_id = :product_id AND wishlist_id = :wishlist_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id, 'wishlist_id'=>$this->wishlist_id]);
            }

            public function modifyQuantity($product_id, $quantity, $wishlist_id) {
                $SQL = 'UPDATE products_in_wishlist SET quantity = :quantity WHERE product_id = :product_id AND wishlist_id = :wishlist_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['quantity'=>$quantity, 'product_id'=>$product_id, 'wishlist_id'=>$wishlist_id]);
            }

            public function addToCache($product_id) {
                $SQL = 'INSERT INTO cache(product_id) 
                VALUES(:product_id)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id]);
            }

            public function clearCache() {
                $SQL = 'DELETE FROM cache';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
            }

            public function getFromCache() {
                $SQL = 'SELECT * FROM cache';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
                return $STMT->fetch(); 
            }

            public function delete($wishlist_id) {
                $SQL = 'DELETE FROM products_in_wishlist WHERE wishlist_id = :wishlist_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['wishlist_id'=>$wishlist_id]);
                $SQL = 'DELETE FROM wishlist WHERE wishlist_id = :wishlist_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['wishlist_id'=>$wishlist_id]);
            }
        }