<?php
    namespace app\models;

        class Product extends \app\core\Model {

            function __construct() {
                parent::__construct();
            }
               
            function get($product_id) {
                $SQL = 'SELECT * FROM product WHERE product_id = :product_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$product_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetch();
            }
        
            function getAllBySeller($seller_id) {
                $SQL = 'SELECT * FROM product WHERE seller_id = :seller_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['seller_id'=>$seller_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetchAll();
            }
            function getAll() {
                $SQL = 'SELECT * FROM product';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetchAll();
            }

            function getAllByCategory($category_id) {
                $SQL = 'SELECT * FROM product WHERE category_id = :category_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['category_id'=>$category_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetchAll();
            }
        
            function insert() {
                $SQL = 'INSERT INTO product(product_name, category_id,seller_id, available_quantity, price, description, quality) VALUES(:product_name, :category_id, :seller_id, :available_quantity,  :price, :description, :quality)';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_name'=>$this->product_name, 'category_id'=>$this->category_id, 'seller_id'=>$this->seller_id,  'available_quantity'=>$this->available_quantity,'price'=>$this->price, 'description'=>$this->description, 'quality'=>$this->quality]);
            }

            function delete(){
                $SQL = 'DELETE FROM product WHERE product_id = :product_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_id'=>$this->product_id]);
            }

            function update() {
                $SQL = 'UPDATE product SET product_name = :product_name, category_id = :category_id,available_quantity = :available_quantity, price = :price, description = :description, quality = :quality WHERE product_id = :product_id';
    
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['product_name'=>$this->product_name, 'category_id'=>$this->category_id, 'available_quantity'=>$this->available_quantity, 'price'=>$this->price, 'description'=>$this->product_description, 'quality'=>$this->quality, 'product_id' =>$this->product_id]);
            }
        }