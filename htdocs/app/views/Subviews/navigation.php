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
	<div style = "position:absolute;top:100px;left:50px;"> 
		<li><a href='/Home/index'>Home Page</a></li>

		<?php
			if (!isset($_SESSION['user_id'])) {
				echo "<li><a href='/User/login'>Log in</a></li>";
			}
			else
				echo "<li><a href='/User/logout'>Log out</a></li>";
		?>
	</div>
</ul>
