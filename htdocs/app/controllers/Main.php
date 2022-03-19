<?php
    namespace app\controllers;

        class Main extends \app\core\Controller {

            public function index() {
                $product = new \app\models\Product();
                $allProducts = $product->getAll();
                $this->view('Main/index', $allProducts);
            }
        }