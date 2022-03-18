<ul>
	<form method="post" action = "" style = "position:absolute;top:10px;right:100px;">
        <input type="text" name="search">
        <select name = "search_type">
            <option value = "product_name">Search By Product Name</option>
            <option value = "seller">Search By Seller</option>
            <option value = "category">Search By category</option>
        </select>
        <button type="submit" name="action">Search</button>
    </form>
	<div> 
		<li><a href='/Main/index'>Home Page</a></li>
		<?php
			if (isset($_SESSION['seller_id'])) {
				echo "<li><a href='/Seller/index'>View Seller Profile</a></li>";
			}
			else if (isset($_SESSION['user_id'])) {
				echo "<li><a href='/Seller/create'>Create Seller Profile</a></li>";
			}
		?>
	</div>
</ul>
