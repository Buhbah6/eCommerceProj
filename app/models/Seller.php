<?php
    namespace app\models;

    class Seller extends \app\core\Model {
        
        function __construct(){
            parent::__construct();
        }

        function get($seller_id) {
            $SQL = 'SELECT * FROM seller WHERE seller_id = :seller_id';
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['seller_id'=> $seller_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Seller");
            return $STMT->fetch();
        }

        function getByUserId($user_id) {
            $SQL = 'SELECT * FROM seller WHERE user_id = :user_id';
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['user_id'=> $user_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Seller");
            return $STMT->fetch();
        }

        function getAll() {
            $SQL = 'SELECT * FROM seller';
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute();
            $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Seller");
            return $STMT->fetchAll();
        }

        function insert() {
            $SQL = 'INSERT INTO seller(user_id, type, name, location) VALUES(:user_id, :type, :name, :location)';
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['user_id'=>$this->user_id, 'type'=>$this->type, 'name'=>$this->name, 'location'=>$this->location]);
        }

        function update() {
            $SQL = 'UPDATE seller SET name = :name, location = :location WHERE seller_id = :seller_id';
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['name'=>$this->name, 'location'=>$this->location, 'seller_id'=>$this->seller_id]);
        }

        function delete() {
            $SQL = 'DELETE FROM seller WHERE seller_id = :seller_id';
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['seller_id'=>$this->seller_id]);
        }

        function getId($user_id) {
            $SQL = 'SELECT seller_id FROM seller WHERE user_id = :user_id';
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['user_id'=> $user_id]);
            return $STMT->fetch();
        }

        function getAllProducts() {
            $SQL = 'SELECT * FROM product WHERE seller_id = :seller_id';
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['seller_id'=>$this->seller_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
            return $STMT->fetchAll();
        }
    }