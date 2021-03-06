<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="../public/css/home.css">
		<link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title><?= _("Seller Profile") ?></title>
    </head>
    <body>
        <div class='container'>
            <?php
                $this->view('subviews/navigation');
            ?>
            <?php
                if(isset($_SESSION['seller_id']) && $data->seller_id == $_SESSION['seller_id']) {
                    echo "<a href='/Seller/update'>". _("Update Seller Information")."</a><br>";
                    echo "<a href='/Seller/delete' onclick='return confirm(". _("Are you sure") .");' 
                        class='m-2' id='del'>". _("Delete Seller Page and all Products")."</a><br>";
                    echo "<a href='/Product/create'>". _("Add Product")."</a><br>";
                    echo "<a href='/Seller/salehistory'>". _("View Sale History")."</a><br><br><br>";
                }
                echo "<h1 style= 'text-align: center;'>" . $data->name . "</h1>";
                $this->view('Product/subviews/list', $data->getAllProducts());
            ?>
        </div>
    </body>
</html>