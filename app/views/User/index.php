<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="../public/css/home.css">
           <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Profile</title>
    </head>
    <body>
        <div class='container'>
            <?php
                echo "<a href='/User/logout'>Logout</a> &emsp; &emsp; &emsp; &emsp; <a id='log'href='/User/update'>Modify Account</a> | <a class='home'href='/Main/index'>Home Page</a><br>";
                echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
                $this->view('Subviews/navigation');
                echo "<a href='/Wishlist/main'>Create/View Wishlists</a>"
            ?>
        </div>
    </body>
</html>