<html>
    <head>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title><?= _("Reviews") ?></title>
    </head>
    <body>
        <div class='container'>
        <?php
				$this->view('Subviews/navigation');
			?>
        <h1 style= 'text-align: center;'><?= _("Reviews") ?></h1> 
        
            <?php
            $product_id = 0;
               
           if(is_string($data)){
                $product_id = $data;
            }
            else{
                foreach($data as $review) {
                    $user = $review->getUser($review->user_id);
                    $username = $user->username;
                    $text = $review->review_content;
                    $product_id = $review->product_id;
                    echo "<h4>$username:</h4> $text <br>";
                    if (isset($_SESSION['user_id']) && $user->user_id == $_SESSION['user_id'])
                            echo "<a href='/Reviews/update/$review->review_id'>". _("Modify")."</a> | 
                            <a href='/Reviews/delete/$review->review_id'>". _("Delete")."</a> <br><br>";
                }
                        
            }
                echo "<a href='/Reviews/create/$product_id'>". _("Add a review")."</a> <br><br>";
            ?>

        </div>
    </body>
</html>
