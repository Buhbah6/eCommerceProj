<?php
    namespace app\controllers;
    
    class Search extends \app\core\Controller{
        public function search(){
            if($_POST['search_type'] == 'product_name'){
                $product = new \app\models\Product();
                $results = $product->searchByName($_POST['search']);
                
                $this->view('Main/index/', $results);

            }else if($_POST['search_type'] == 'product_name'){
                $product = new \app\models\Product();
                $results = $product->searchByName($_POST['search']);
            }
        }
    }