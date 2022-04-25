<?php
    namespace app\controllers;

        class Category extends \app\core\Controller {

            public function index() {
                $categories = new \app\models\Category();
                $categories = $categories->getAll();

                $this->view('Category/index', $categories);
            }

        }