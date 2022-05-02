<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title><?= _("Update Comment") ?></title>
    </head>
    <body>
        <div class='container'>
        <?php
				$this->view('Subviews/navigation');
			?>

            <h3><?= _("Update Review") ?></h3>
            <form method='post' action=''>

                <?php
                $review = new \app\models\Reviews();
                $review = $review->getReview($data);
                $review_content = $review-> review_content;

            ?>
                <label class='form-label'><?= _("Review:") ?><textarea name='review_content' cols="80" class='form-control' required><?= $review_content?></textarea></label><br>
                <input type="submit" name='action' value='Submit Comment' class='form-control' />
            </form>
        </div>
    </body>
</html>