<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title><?= _("Create a Seller Profile") ?></title>
    </head>
    <body>
        <div class='container'>
            <?php
                $this->view('subviews/navigation');
            ?>
            <br><br>
            <h1><?= _("Create your Seller Profile") ?></h1>
            <p><?= _("Please enter the following information to register as a seller") ?></p>
            <form method='post' action=''>
                <label><?= _("Type:") ?><br><input type='radio' name='type' value='0'> <?= _("Independent") ?><br>
                    <input type='radio' name='type' value='1' checked> <?= _("Business") ?></label><br><br>
                <label class='form-label'><?= _("Name:") ?><input type='text' name='name' class='form-control' required /></label><br>
                <label class='form-label'><?= _("Location:") ?><input type='text' name='location' class='form-control' required/></label><br>
                <input type="submit" name='action' value='Create!' class='form-control' />
            </form>
        </div>
    </body>
</html>