<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Seller Profile</title>
    </head>
    <body>
        <div class='container'>
            <?php
                if(isset($_SESSION['seller_id']) && $data->seller_id == $_SESSION['seller_id']) {
                    echo "<a href='/Seller/update'>Update Seller Information</a><br>";
                    echo "<a href='/Seller/delete' onclick='return confirm(\"Are you sure?\");' 
                        class='m-2' id='del'>Delete Seller Page and all Products</a><br>";
                    echo "<a href='/Product/create'>Add Product</a><br><br><br>";
                }
                echo "<h1>" . $data->name . "</h1>";
                $this->view('Product/list', $data->getAllProducts());
            ?>
        </div>
    </body>
</html>