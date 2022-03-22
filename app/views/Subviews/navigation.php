<script src="https://kit.fontawesome.com/0d3e675152.js" crossorigin="anonymous"></script>
	
	<div> 
		<a class='home'href='/Main/index'>Home Page</a><br>
		<?php
			if (isset($_SESSION['seller_id'])) {
				$id = $_SESSION['seller_id'];
				echo "<a href='/Seller/index/$id'>View Seller Profile</a><br>";
			}
			else if (isset($_SESSION['user_id'])) {
				echo "<a href='/Seller/create'>Create Seller Profile</a><br>";
			}
		?>
		<a href='/Seller/list'>View All Sellers</a> | <a href='/Cart/index'>View Cart</a><br>
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

