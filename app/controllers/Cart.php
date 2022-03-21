<?php
    namespace app\controllers;

        #[\app\filters\Login]
        class Cart extends \app\core\Controller { 

            public function index() { 
                $cart = new \app\models\Cart();
                $cart = $cart->get($_SESSION['cart_id']);
                $this->view('Cart/index', $variable);
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
                $quantity = $cart->getQuantityByProductId($product_id); + 1
                if ($cart->getProductInCart($product_id)) {
                    updateQuantity($product_id, $quantity)
                }
                else {
                    $cart->addToCart($product_id, $quantity);
                }
                $this->view('Cart/index', $variable) 
            }

            public function removeFromCart($product_id) {
                $cart = new \app\models\Cart();
                $cart->removeFromCart($product_id);
                }
                $this->view('Cart/index', $variable) 
            }

            public function updateQuantity($product_id, $quantity) {
                $cart = new \app\models\Cart();
                $cart->modifyQuantity($product_id, $quantity);
                $this->view('Cart/index', $variable) 
            }
        }