<script src="https://kit.fontawesome.com/0d3e675152.js" crossorigin="anonymous"></script>
<div class="search-box">
	<form method="post" action = "">
        <input class="search-text" type="text" name="search" placeholder="Search">
        <select id='select-option' name = "search_type">
            <option value = "product_name">Search By Product Name</option>
            <option value = "seller">Search By Seller</option>
            <option value = "category">Search By category</option>
        </select>
        <button id='search' type="submit" name="action">
			<i class="fas fa-search"></i>
		</button>
    </form>
	</div>	
	<div> 
		<ul id='remove'><a class='home'href='/Main/index'>Home Page</a></ul>
		<?php
			if (isset($_SESSION['seller_id'])) {
				echo "<li><a href='/Seller/index'>View Seller Profile</a></li>";
			}
			else if (isset($_SESSION['user_id'])) {
				echo "<li><a href='/Seller/create'>Create Seller Profile</a></li>";
			}
		?>
	</div>

