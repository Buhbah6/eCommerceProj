<html>
    <head>
	<script src="https://kit.fontawesome.com/0d3e675152.js" crossorigin="anonymous"></script>
        <!-- CSS only -->
        <link rel="stylesheet" href="../public/css/home.css">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title><?= _("Home page")?></title>
    </head>
    <body>
	<div> 
	<?php
            global $localizations;
                foreach($localizations as $locale){
                   echo " <a href='?lang=$locale'>". \Locale::getDisplayName($locale, $locale)."</a>|";
                }
                echo "<br>";
                if (!isset($_SESSION['user_id']))
                    echo "<a id='log' href='/User/login'>". _("Login")."</a> | <a id='reg' href='/User/register'>". _("Register")."</a>";
                else  
                    echo "<a href='/User/index'>". _("My Profile")."</a> | <a href='/User/logout'>". _("Logout")."</a>";      
            ?>
            <h1>Furniture Land</h1>
		<a class='home'href='/Main/index'><?= _("Home Page")?></a><br>
		<?php
			if (isset($_SESSION['seller_id'])) {
				$id = $_SESSION['seller_id'];
				echo "<a href='/Seller/index/$id'>".("View Seller Profile")."</a><br>";
			}
			else if (isset($_SESSION['user_id'])) {
				echo "<a href='/Seller/create'>".("Create Seller Profile")."</a><br>";
			}
		?>
		<a href='/Seller/list'><?= _("View All Sellers")?></a> | <a href='/Cart/index'><?= _("View Cart") ?></a><br>
		<a href='/Category/index'><?= _("View All Categories")?></a>
	</div>
	<?php
        $this->view('Search/search');
        $search = new \app\controllers\Search();
        $type = filter_input(INPUT_POST, 'search_type');
        if ($type === "product_name")
            $search->searchByName();
        else if ($type === "seller")
            $search->searchBySeller(); 
    ?>
    </body>
</html>

	
	

