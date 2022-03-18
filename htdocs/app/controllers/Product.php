<?php
    namespace app\controllers;
        #[\app\filters\Login]
        class Product extends \app\core\Controller {

            public function index() {
                $product = new \app\models\Product();
                $product = $product->getAll();
                $this->view('Product/index', $product);
            }

            public function create($seller_id) { //  remove the input after the seller is implemented
                $categorys = new \app\models\Category();
                $categorys = $categorys->getAll();

                if(!isset($_POST['action'])){
                    $this->view('Product/create',$categorys);
                }else{
                   $newProduct = new \app\models\Product();
                   $newProduct->product_name = $_POST['product_name'];
                   $newProduct->available_quantity = $_POST['available_quantity'];
                   $newProduct->price = $_POST['price'];
                   $newProduct->description = $_POST['description'];
                   $newProduct->quality = $_POST['quality'];
                   $newProduct->category_id = $_POST['category_id'];
                   $_SESSION['seller_id'] = $seller_id; // need to to remove after the seller is implemented
                   $newProduct->seller_id = $_SESSION['seller_id']; // need to change later : need to be seller_id instead of user_id

                   $newProduct->insert();
                   header('location:/Product/index');

                   
                }
            }

            public function update($product_id){ // remove the input after the seller is implemented
                $categorys = new \app\models\Category();
                $categorys = $categorys->getAll();

                $product = new \app\models\Product();
                $product = $product->get($product_id);

                if(!isset($_POST['action'])){
                    $data = array($categorys, $product);
                    $this->view('Product/update', $data);
                }else{
                   $product = new \app\models\Product();
                   $product->product_id = $product_id;
                   $product->product_name = $_POST['product_name'];
                   $product->available_quantity = $_POST['available_quantity'];
                   $product->price = $_POST['price'];
                   $product->description = $_POST['description'];
                   $product->quality = $_POST['quality'];
                   $product->category_id = $_POST['category_id'];
                   

                   $product->update(); 
                   header('location:/Product/index');
                }
            }

            public function delete($product_id){ 
                $product = new \app\models\Product();
                $product = $product->get($product_id);

                $product->delete(); 
                header('location:/Product/index');
                }
            }
        
    