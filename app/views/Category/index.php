<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title><?= _("Home page") ?></title>
    </head>
    <body>
        <div class='container'>
            <?php
                $this->view('Subviews/navigation');
            ?>
        <div class='products'>
        <h1 id='all'><?= _("All Category") ?></h1>
            <?php
              foreach($data as $category){
                echo "<div class='card m-2'>
                <div class='card-header'> <a href='/Product/productByCategory/$category->category_id'>$category->name</a>
                </div></div>";
            }
            ?>
        </div>
        </div>
    </body>
</html>