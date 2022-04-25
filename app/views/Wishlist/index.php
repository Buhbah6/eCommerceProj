<html>
    <head>
        <!-- CSS only -->
        
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <title>All Products in Wishlist</title>
    </head>
    <body>
    <div class='container'>
        <?php
            $this->view('subviews/navigation');
            echo "<h1 id='all'>All Products in $data->name</h1>";
        ?>
        <div>
            <?php
                echo "<a href='/Wishlist/delete/$data->wishlist_id'>Delete Wishlist</a>";
                $seller = new \app\models\Seller(); 
                $ids = $data->getAllProductsInWishlist($data->wishlist_id);
                $product = new \app\models\Product();
                $products = [];
                foreach ($ids as $id) {
                    $product = $product->get($id[0]);
                    $products[] = $product;
                }

                foreach($products as $product){
                    $quantity = $data->getQuantityByProductId($product->product_id);
                    $currentSeller = $seller->get($product->seller_id);
                    echo "<div class='card m-2'>
                    <div class='card-body'>
                    <b>$product->product_name</b> <br>
                    Price: $$product->price <br>
                    Description: $product->description <br>
                    Sold By: <a href='/Seller/index/$currentSeller->seller_id'>$currentSeller->name</a> <br>
                    Quantity in Wishlist: $quantity[0] <br> <br>
                    <a href='/Wishlist/modifyQuantity/$product->product_id' class='m-2' id='upd'>Modify Quantity</a>
                    <a href='/Wishlist/removeFromWishlist/$product->product_id' class='m-2' id='del'>Remove From Wishlist</a> </div> </div>";
                }
            ?>
        </div>
        </div>
    </body>
</html>