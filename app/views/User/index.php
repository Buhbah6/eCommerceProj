<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="../public/css/home.css">
           <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title><?= _("Profile") ?></title>
    </head>
    <body>
        <div class='container'>
            <?php
            $this->view('Subviews/navigation');

            echo "<br><br><h1>Welcome " . $_SESSION['username'] . "</h1>";
                echo "<a id='log'href='/User/update'>". _("Modify Account")."</a> | <a href='/Wishlist/main'>". _("Create/View Wishlists")."</a> <br>";
                echo "<a id='log'href='/User/purchasehistory'>". _("View Purchase History")."</a>";
            ?>
        </div>
    </body>
</html>