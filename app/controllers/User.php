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
                    if ($user) {
                        if(password_verify($_POST['password'], $user->password_hash)) {
                            $_SESSION['username'] = $user->username;
                            $_SESSION['user_id'] = $user->user_id;
                            $sellerProfile = new \app\models\Seller();
                            $sellerProfile = $sellerProfile->getByUserId($user->user_id);
                            $cart = new \app\models\Cart();
                            $cart = $cart->getByUserId($user->user_id);
                            $_SESSION['seller_id'] = $sellerProfile->seller_id;
                            $_SESSION['cart_id'] = $cart->cart_id;
                        }
                        else
                            $this->view('User/login','Incorrect username/password combination.');

                        if ($user->secret_key != null)
                            header('location:/User/validate2fa');
                        else
                            header('location:/User/setup2fa'); 
                    }
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
                        $this->login();
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

            public function makeQRCode() {
                $data = $_GET['data'];
                \QRcode::png($data);
            }
        
            public function setup2fa() {
                if (isset($_POST['2fa'])) {
                    $currentcode = $_POST['currentCode'];
                    if (\App\core\TokenAuth6238::verify($_SESSION['secretkey'], $currentcode)) {
                        //the user has verified their proper 2-factor authentication setup
                        $user = new \App\models\User();
                        $user = $user->get($_SESSION['user_id']);
                        $user->secret_key = $_SESSION['secretkey'];
                        $user->update2fa();
                        header('location:/User/index/' . $_SESSION['user_id']);
                    }
                    else {
                        header('location:/User/setup2fa?error=tokennot verified!');//reload
                    }
                }
                else if (isset($_POST['no_2fa'])) {
                    $_SESSION['secretkey'] = "nope";
                    header('location:/User/index/' . $_SESSION['user_id']);
                }
                else {
                    $secretkey = \app\core\TokenAuth6238::generateRandomClue();
                    $_SESSION['secretkey'] = $secretkey;
                    $url = \App\core\TokenAuth6238::getLocalCodeUrl($_SESSION['username'], 'FurnitureLand.com', $secretkey,'Furniture Land');
                    $this->view('User/twofasetup', $url);
                }
            }
        
            public function validate2FA() {
                $user = new \App\models\User();
                $user = $user->get($_SESSION['user_id']);
                if ($user->secret_key != null) {
                    if (isset($_POST['2fa'])) {
                        $code = $_POST['code'];
                        $secret = $user->secret_key;
                        if (\App\core\TokenAuth6238::verify($secret, $code)) {
                            $_SESSION['secretkey'] = $secret;
                            header('location:/User/index/' . $_SESSION['user_id']);
                        }
                        else
                            $this->view('User/validate2fa','Invalid code. Please re-enter.');
                    }
                    else
                        $this->view('User/validate2fa');
                }
                else
                    header('location:/User/setup2fa');  
            }

            #[\app\filters\Login]
            public function purchasehistory() {
                $sale = new \app\models\Sale();
                $allPurchases = $sale->getByUserId($_SESSION['user_id']);
                $this->view('User/purchasehistory', $allPurchases);
            }
        }