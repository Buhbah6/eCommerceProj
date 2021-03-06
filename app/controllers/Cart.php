<?php
    namespace app\controllers;

        #[\app\filters\Login]
        class Cart extends \app\core\Controller { 

            public function index() {
                $cart = new \app\models\Cart();
                $ids = $cart->getAllProductsInCart();
                $product = new \app\models\Product();
                $products = [];
                foreach ($ids as $id) {
                    $product = $product->get($id[0]);
                    $products[] = $product;
                }
                $this->view('Cart/index', $products);
            }

            public function create() {
                $cart = new \app\models\Cart();
                $cart->user_id = $_SESSION['user_id'];
                $cart->insert();
                $cart = $cart->getByUserId($_SESSION['user_id']);
                $_SESSION['cart_id'] = $cart->cart_id;
            }

            public function addToCart($product_id) {
                $cart = new \app\models\Cart();
                if ($cart->getProductInCart($product_id) != null) {
                    $quantity = $cart->getQuantityByProductId($product_id);
                    $quantity = $quantity[0] + 1;
                    $this->modifyQtyModel($product_id, $quantity);
                }
                else {
                    $cart->addToCart($product_id);
                }
                $this->index(); 
            }

            public function removeFromCart($product_id) {
                $cart = new \app\models\Cart();
                $cart->removeFromCart($product_id);
                $this->index(); 
            }

            public function modifyQuantity($product_id) {
                $cart = new \app\models\Cart();
                $product = new \app\models\Product();
                $product = $product->get($product_id);
                if(!isset($_POST['change'])){
                    $this->view('Cart/update', $product);
                }else{
                    $cart->modifyQuantity($product_id, $_POST['qty']);  
                    $this->index(); 
                }
            }

            public function modifyQtyModel($product_id, $quantity){
                $cart = new \app\models\Cart();
                $cart->modifyQuantity($product_id, $quantity); 
            }

            public function checkout() {
                $sale = new \app\models\Sale();
                $cart = new \app\models\Cart();
                $product = new \app\models\Product();
                $ids = $cart->getAllProductsInCart();
                $products = [];
                foreach ($ids as $id) {
                    $product = $product->get($id[0]);
                    $products[] = $product;
                }
                
                if (!isset($_POST['action'])) {
                    $this->view('Cart/checkout');
                }
                else {
                    foreach ($products as $productInCart) {
                        $quantity = $cart->getQuantityByProductId($productInCart->product_id);
                        $sale->insert($productInCart->seller_id, $_SESSION['user_id'], $productInCart->product_id, $quantity[0]);
                        $cart->removeFromCart($productInCart->product_id);
                    }
                    header('location:/User/purchasehistory');
                }

            }
        }