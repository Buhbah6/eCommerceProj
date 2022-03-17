<?php
    namespace app\controllers;
   
        class User extends \app\core\Controller {

            function login() { 
                if (!isset($_POST['action'])) 
                    $this->view('User/login');
                else {//there is a form submitted
                    $user = new \app\models\User();
                    $user = $user->get($_POST['username']);
                    if ($user) 
                        if(password_verify($_POST['password'], $user->password_hash)) {
                            $_SESSION['user_id'] = $user->user_id;
                            header('location:/Home/index');
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
                    $newUser->email = $_POST['email'];
                    $newUser->contact = $_POST['contact'];
        
                    if (!$newUser->exists() && $_POST['password'] == $_POST['password_confirm']) {
                         $newUser->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
                        $newUser->insert();
                        header('location:/Home/index');
                    }
                    else 
                        $this->view('User/register','The user account with that username already exists.');
                }
            }
        
            #[\app\filters\Login]
            function logout() {
                session_destroy();//deletes the session ID and all data
                header('location:/User/login');
            }
        }