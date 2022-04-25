<?php
    namespace app\controllers;

        #[\app\filters\Login]
        class Wishlist extends \app\core\Controller { 

            public function index($wishlist_id) {
                $list = new \app\models\Wishlist();
                $list = $list->get($wishlist_id);
                if ($list->getFromCache() == null)
                    $this->view('Wishlist/index', $list);
                else {
                    $product_id = $list->getFromCache()[0];
                    $list->clearCache();
                    $this->addToWishlist($product_id, $wishlist_id);
                }
            }

            public function main() {
                $list = new \app\models\Wishlist();
                $allLists = $list->getAll();
                $this->view('Wishlist/main', $allLists);
            }

            public function select($product_id) {
                $list = new \app\models\Wishlist();
                if ($list->getFromCache() != null)
                    $list->clearCache();
                $list->addToCache($product_id);
                $this->main();
            }

            public function create() {
                if (!isset($_POST['action'])) {
                    $this->view('Wishlist/create');
                }
                else {
                    $list = new \app\models\Wishlist();
                    $list->user_id = $_SESSION['user_id'];
                    $list->name = $_POST['name'];
                    $list->description = $_POST['description'];
                    $list->insert();
                    $this->main();
                }
            }

            public function addToWishlist($product_id, $wishlist_id) {
                $list = new \app\models\Wishlist();
                $list->wishlist_id = $wishlist_id;
                if ($list->getProductInWishlist($product_id) != null) {
                    var_dump($list);
                    $quantity = $list->getQuantityByProductId($product_id);
                    $quantity = $quantity[0] + 1;
                    $this->modifyQuantity($product_id, $quantity, $wishlist_id);
                }
                else {
                    $list->addToWishlist($product_id);
                }
                $this->index($wishlist_id); 
            }

            public function removeFromWishlist($product_id) {
                $list = new \app\models\Wishlist();
                $list->removeFromWishlist($product_id);
                $this->main();
            }

            public function modifyQuantity($product_id, $quantity, $wishlist_id) {
                $list = new \app\models\Wishlist();
                $list->modifyQuantity($product_id, $quantity, $wishlist_id);  
            }

            public function delete($wishlist_id) {
                $list = new \app\models\Wishlist();
                $list->delete($wishlist_id);
                $this->main();
            }
        }