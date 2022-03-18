<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="../public/css/home.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Home page</title>
    </head>
    <body>
        <div class='container'>
            <?php
                if (!isset($_SESSION['user_id']))
                    echo "<a id='log' href='/User/login'>Login</a> | <a id='reg' href='/User/register'>Register</a>";
                else  
                    echo "<a href='/User/index'>My Profile</a> | <a href='/User/logout'>Logout</a>";      
            ?>
            <h1>Furniture Land</h1>
            <?php
                $this->view('Subviews/navigation');
            ?>
        </div>
    </body>
</html>