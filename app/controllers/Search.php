<?php
    namespace app\controllers;
    
    class Search extends \app\core\Controller{
       
        public function searchByName(){
            $product = new \app\models\Product();
            $results = $product->searchByName($_POST['search']);

            if (isset($_POST['action'])) 
            $this->view('subviews/search', $results);
        }

        public function searchBySeller(){
            $product = new \app\models\Product();
            $results = $product->searchBySeller($_POST['search']);

            if (isset($_POST['action'])) 
            $this->view('subviews/search', $results);
        }
    }