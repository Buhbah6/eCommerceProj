<?php
    namespace app\models;

        class User extends \app\core\Model {

            function __construct() {
                parent::__construct();
            }

            function get($user_id) { //get by user_id
                $SQL = 'SELECT * FROM user WHERE user_id = :user_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['user_id'=>$user_id]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\User");
                return $STMT->fetch();
            }

            function getByUsername($username) {
                $SQL = 'SELECT * FROM user WHERE username = :username';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['username'=>$username]);
                $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\User");
                return $STMT->fetch();
            }

            function exists() {
                return $this->get($this->username) != false;
            }

            function insert() {
                $SQL = 'INSERT INTO user(username, password_hash, email, contact) VALUES(:username, :password_hash, :email, :contact)';
		        $STMT = self::$_connection->prepare($SQL);
		        $STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash, 'email'=>$this->email, 'contact'=>$this->contact]);
            }

            function update() {
                $SQL = 'UPDATE user SET username = :username, email = :email, contact = :contact WHERE user_id = :user_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['username'=>$this->username, 'email'=>$this->email, 'contact'=>$this->contact, 'user_id'=>$this->user_id]);
            }

            function update2fa() {
                $SQL = 'UPDATE user SET secret_key = :secret_key WHERE user_id = :user_id';
                $STMT = self::$_connection->prepare($SQL);
                $STMT->execute(['secret_key'=>$this->secret_key,'user_id'=>$this->user_id]);
            }
        }