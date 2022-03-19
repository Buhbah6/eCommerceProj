<script src="https://kit.fontawesome.com/0d3e675152.js" crossorigin="anonymous"></script>
	
	<div> 
		<ul id='remove'><a class='home'href='/Main/index'>Home Page</a></ul>
		<?php
			if (isset($_SESSION['seller_id'])) {
				$id = $_SESSION['seller_id'];
				echo "<li><a href='/Seller/index/$id'>View Seller Profile</a></li>";
			}
			else if (isset($_SESSION['user_id'])) {
				echo "<li><a href='/Seller/create'>Create Seller Profile</a></li>";
			}
		?>
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

