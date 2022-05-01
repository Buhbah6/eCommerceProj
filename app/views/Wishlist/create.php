<html>
	<head>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title>Create a Wishlist</title>
	</head>
	<body>
		<div class='container'>
		<?php
                $this->view('subviews/navigation');
            ?>

		<h1>Create a Wishlist</h1>
		<form method='post' action=''>
			<label class='form-label'>Name:<input type='text' name='name' class='form-control' required /></label><br>
			<label class='form-label'>Description:<textarea name='description' cols="80" class='form-control' required></textarea></label><br>
			<input type="submit" name='action' value='Create!' class='form-control' />
		</form>
		</div>
	</body>
</html>