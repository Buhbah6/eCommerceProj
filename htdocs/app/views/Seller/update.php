<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Update Seller Profile</title>
    </head>
    <body>
        <div class='container'>

            <h1>Update your Seller Profile</h1>
            <form method='post' action=''>
                <label class='form-label'>Name:<input type='text' name='name' class='form-control' value="<?=$data->name ?>" /></label><br>
                <label class='form-label'>Location:<input type='text' name='location' class='form-control' value="<?=$data->location ?>" /></label><br>
                <input type="submit" name='action' value='Update!' class='form-control' />
            </form>
            <?php
                $this->view('subviews/navigation');
            ?>
        </div>
    </body>
</html>