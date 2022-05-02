<html>
    <head>
        <!-- CSS only -->
        
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <title><?= _("Update") ?></title>
    </head>
    <body>
        <div class="container">
            <?php
                 $this->view('Subviews/navigation');
            ?>
        <div class='products'>

        <h1 style='text-align: center;'><?= _("Change Quantity") ?></h1>
        <form method='post' action=''>
        <?php
            $seller = new \app\models\Seller(); 
            $list = new \app\models\Wishlist();
            if ($data != null) {
                    $quantity = $list->getQuantityByProductId($data->product_id, $list->getFromCache()[0]);
                    $currentSeller = $seller->get($data->seller_id);
                    echo "<div class='card m-2'>
                    <div class='card-body'>
                    <b>$data->product_name</b> <br>
                    ". _("Price:") ."$data->price <br>
                    ". _("Description:") ." $data->description <br>
                    ". _("Sold By:") ." <a href='/Seller/index/$currentSeller->seller_id'>$currentSeller->name</a> <br>
                    ". _("Quantity in cart: ") ."<input type='text' name='qty' value=$quantity[0] />
                    <input type='submit' name='change' value='update!'/><br>
                    <a href='/Wishlist/removeFromWishlist/$data->product_id' class='m-2' id='del'> " . _("Remove From Wishlist") . "</a> </div> </div>";
                
            }
           
        ?>
        </from>
        </div>
        </div>
    </body>
</html>