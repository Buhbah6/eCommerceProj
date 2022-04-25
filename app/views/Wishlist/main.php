<html>
    <head>
        <!-- CSS only -->
        
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <title>Your wishlists</title>
    </head>
    <body>
        <div class='container'>
            <?php
                $this->view('Subviews/navigation');
	        ?>
            <div>
            <h1>All Wishlists</h1>
            <br><a href="/Wishlist/create">Create a new Wishlist</a><br><br>
            <ul>
                <?php
                    if ($data != null) {
                        foreach($data as $wishlist){
                            echo "<li><a href=/Wishlist/index/$wishlist->wishlist_id>$wishlist->name</a></li>";
                        }
                        echo "<br><br>";
                    }
       
                ?>
            </ul>
            </div>
        </div>
    </body>
</html>