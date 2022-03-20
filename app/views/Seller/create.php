<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Create Seller Profile</title>
    </head>
    <body>
        <div class='container'>

            <h1>Create your Seller Profile</h1>
            <p>Please enter the following information to register as a Seller</p>
            <form method='post' action=''>
                <label>Type:<br><input type='radio' name='type' value='0'> Independent<br>
                    <input type='radio' name='type' value='1'> Business</label><br><br>
                <label class='form-label'>Name:<input type='text' name='name' class='form-control' /></label><br>
                <label class='form-label'>Location:<input type='text' name='location' class='form-control' /></label><br>
                <input type="submit" name='action' value='Create!' class='form-control' />
            </form>
            <?php
                $this->view('subviews/navigation');
            ?>
        </div>
    </body>
</html>