<?php
    namespace app\controllers;

        class Seller extends \app\core\Controller {

            public function index($seller_id) { //shows profile page -> basic info, publication and comments subviews and modify button
                $seller = new \app\models\Seller();
                $currentSeller = $seller->get($seller_id);
                $this->view('Seller/index', $currentSeller);
            }

            public function create() {
                if (!isset($_POST['action'])) {
                    $this->view('Seller/create');
                }
                else {
                    $sellerProfile = new \app\models\Seller();
                    $sellerProfile->user_id=$_SESSION['user_id'];
                    $sellerProfile->type=$_POST['type'];
                    $sellerProfile->name=$_POST['name'];
                    $sellerProfile->location=$_POST['location'];
                    $sellerProfile->insert();
                    $sellerProfile = $sellerProfile->getByUserId($_SESSION['user_id']);
                    $_SESSION['seller_id'] = $sellerProfile->seller_id;
                    header("location:/Seller/index/$sellerProfile->seller_id");
                }
            }

            public function update() {
                $seller = new \app\models\Seller();
                $seller = $seller->get($_SESSION['seller_id']);
                if (!isset($_POST['action'])) {
                    $this->view('Seller/update', $seller);
                }
                else {
                    $seller->name=$_POST['name'];
                    $seller->location=$_POST['location'];
                    $seller->update();
                    header("location:/Seller/index/$seller->seller_id");
                }
            }

            public function delete() {
                $seller = new \app\models\Seller();
                $seller = $seller->get($_SESSION['seller_id']);
                $products = new \app\models\Product();
                $products = $products->getAllBySeller($_SESSION['seller_id']);
                foreach($products as $product) {
                    $product->delete();
                }
                $seller->delete();
                unset($_SESSION['seller_id']);
                header("location:/Main/index");
            }

            public function list() {
                $sellerObj = new \app\models\Seller();
                $sellers = $sellerObj->getAll();
                $this->view('Seller/list', $sellers);
            }
        }