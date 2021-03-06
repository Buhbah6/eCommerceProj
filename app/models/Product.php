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

            public function searchBySeller($term){
                $SQL = 'SELECT * FROM seller WHERE name LIKE :term';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['term'=>"%$term%"]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Seller");
                return $STMT->fetchAll(); 
            }
            public function searchByName($term) { //for searches
                $SQL = 'SELECT * FROM product WHERE product_name LIKE :term';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['term'=>"%$term%"]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetchAll(); 
            }

            public function sortByPrice() { //for searches
                $SQL = 'SELECT * FROM product Order By price asc';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetchAll(); 
            }

            public function sortByNameAlphabetically() { 
                $SQL = 'SELECT * FROM product Order By product_name asc';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetchAll(); 
            }

            public function sortBySeller() { 
                $SQL = 'SELECT product.*, seller.name,seller.seller_id FROM product 
                Inner Join seller
                ON product.seller_id = seller.seller_id
                Order By seller.name asc';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetchAll(); 
            }

            public function sortByCategory() { 
                $SQL = 'SELECT product.*, category.category_id, category.name FROM product 
                Inner Join category
                ON product.category_id = category.category_id
                Order By category.name asc';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
                return $STMT->fetchAll(); 
            }

            // public function getAllByCategory($category_id){
            //     $SQL = 'SELECT product.*, category.name FROM product 
            //     Inner Join category
            //     ON product.category_id = $category_id
            //     Order By product.product_name asc';
            //     $STMT = self::$_connection->prepare($SQL);
            //     $STMT->execute();
            //     $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
            //     return $STMT->fetchAll();
            // }
        }