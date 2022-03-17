<ul>
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
