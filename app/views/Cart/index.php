<html>
    <head>
        <!-- CSS only -->
        
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <title><?= _("All Products in Cart") ?></title>
    </head>
    <body>
    <div class='container'>
			<?php
				$this->view('Subviews/navigation');
			?>
        <div class='products'>

        <h1 id='all'><?= _("All Products in Cart") ?></h1>
        
        <?php
            $seller = new \app\models\Seller(); 
            $cart = new \app\models\Cart();
            if ($data != null) {
                foreach($data as $product){
                    $quantity = $cart->getQuantityByProductId($product->product_id);
                    $currentSeller = $seller->get($product->seller_id);
                    echo "<div class='card m-2'>
                    <div class='card-body'>
                    <b>$product->product_name</b> <br>
                   ". _(" Price:") ." $$product->price <br>
                    ". _("Description:") . " $product->description <br>
                    ". _("Sold By:") ." <a href='/Seller/index/$currentSeller->seller_id'>$currentSeller->name</a> <br>
                    ". _("Quantity in cart:") ." $quantity[0] <br> <br>
                    <a href='/Cart/modifyQuantity/$product->product_id' class='m-2' id='upd'>". _("Modify Quantity")."</a>
                    <a href='/Cart/removeFromCart/$product->product_id' class='m-2' id='del'>". _("Remove From Cart")."</a> </div> </div>";
                }
                echo "<button type='button' class='btn btn-light btn-lg'><a href='/Cart/checkout'>". _("Proceed to Checkout") ."</a></button><br>";
            }
        ?>
        </div>
        </div>
    </body>
</html>