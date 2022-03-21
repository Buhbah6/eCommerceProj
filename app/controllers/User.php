<?php
    namespace app\controllers;
   
           class User extends \app\core\Controller {

            public function index() { 
                $user = new \app\models\User();
                $currentUser = $user->get($_SESSION['user_id']);
                $this->view('User/index', $currentUser);
            }

            function login() {
                if (!isset($_POST['action']))
                    $this->view('User/login');
                else {
                    $user = new \app\models\User();
                    $user = $user->getByUsername($_POST['username']);
                    if ($user) 
                        if(password_verify($_POST['password'], $user->password_hash)) {
                            $_SESSION['username'] = $user->username;
                            $_SESSION['user_id'] = $user->user_id;
                            $sellerProfile = new \app\models\Seller();
                            $sellerProfile = $sellerProfile->getByUserId($user->user_id);
                            $cart = new \app\models\Cart();
                            $cart = $cart->getByUserId($user->user_id);
                            $_SESSION['seller_id'] = $sellerProfile->seller_id;
                            $_SESSION['cart_id'] = $cart->cart_id;
                            header('location:/Main/index');
                        } 
                        else
                            $this->view('User/login','Incorrect username/password combination.');
                    else
                        $this->view('User/login','Incorrect username/password combination.');
                }
            }
        
            function register() { //register here
                if (!isset($_POST['action'])) //there is no form being submitted
                    $this->view('User/register');
                else { //there is a form submitted
                    $newUser = new \app\models\User();
                    $newUser->username = $_POST['username'];
        
                    if (!$newUser->exists() && $_POST['password'] == $_POST['password_confirm']) {
                        $newUser->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $newUser->email = $_POST['email'];
                        $newUser->contact = $_POST['contact'];
                        $newUser->insert();
                        $newUser = $newUser->getByUsername($newUser->username);
                        $_SESSION['user_id'] = $newUser->user_id;
                        $_SESSION['username'] = $newUser->username;
                        $cart = new \app\controllers\Cart();
                        $cart->create();
                        header('location:/Main/index');
                    }
                    else 
                        $this->view('User/register','The user account with that username already exists.');
                }
            }

            #[\app\filters\Login]
            public function update() {
                $user = new \app\models\User();
                $user = $user->get($_SESSION['user_id']);
                if (!isset($_POST['action'])) {
                    $this->view('User/update', $user);
                }
                else {
                    $user->username = $_POST['username'];
                    $_SESSION['username'] = $user->username;
                    $user->email = $_POST['email'];
                    $user->contact = $_POST['contact'];
                    $user->update();
                    header("location:/User/index");
                }
            }
        
            #[\app\filters\Login]
            function logout() {
                session_destroy();
                header('location:/Main/index');
            }
        }