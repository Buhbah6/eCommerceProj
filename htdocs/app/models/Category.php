<?php
    namespace app\models;

        class Category extends \app\core\Model {

            function __construct() {
                parent::__construct();
            }
               
            function get($category_id) {
                $SQL = 'SELECT * FROM category WHERE category_id = :category_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['category_id'=>$category_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
                return $STMT->fetch();
            }
        
            function getAll() {
                $SQL = 'SELECT * FROM category';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute();
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
                return $STMT->fetchAll();
            }

        
        }