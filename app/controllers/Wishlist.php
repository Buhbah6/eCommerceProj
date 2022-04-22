<?php
    namespace app\controllers;

        #[\app\filters\Login]
        class Wishlist extends \app\core\Controller { 

            public function index() {
                $list = new \app\models\Wishlist();
                $ids = $list->getAllProductsInWishlist();
                $product = new \app\models\Product();
                $products = [];
                foreach ($ids as $id) {
                    $product = $product->get($id[0]);
                    $products[] = $product;
                }
                $this->view('Wishlist/index', $products);
            }

            public function main() {
                $list = new \app\models\Wishlist();
                $allLists = $list->getAll();
                $this->view('Wishlist/main', $allLists);
            }

            public function create() {
                $list = new \app\models\Wishlist();
                $list->user_id = $_SESSION['user_id'];
                $list->insert();
                $this->index();
            }

            public function addToWishlist($product_id) {
                $list = new \app\models\Wishlist();
                if ($list->getProductInWishlist($product_id) != null) {
                    $quantity = $list->getQuantityByProductId($product_id);
                    $quantity = $quantity[0] + 1;
                    $this->modifyQuantity($product_id, $quantity);
                }
                else {
                    $list->addToWishlist($product_id);
                }
                $this->index(); 
            }

            public function removeFromWishlist($product_id) {
                $list = new \app\models\Wishlist();
                $list->removeFromCart($product_id);
                $this->index(); 
            }

            public function modifyQuantity($product_id, $quantity) {
                $list = new \app\models\Wishlist();
                $list->modifyQuantity($product_id, $quantity);  
            }
        }