<html>
	<head>
		<!-- CSS only -->
		
		<link rel="stylesheet" href="../public/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title>All Products</title>
	</head>
	<body>
		<div class='products'>

		<h1 id='all'>Products</h1>

		
		<?php
          foreach($data as $product){
			echo "<div class='card m-2'>
			<div class='card-body'>
			<b>$product->product_name</b> <br>
			Price: $product->price <br>
			Quantity: $$product->available_quantity <br>
			Description: $product->description <br> <br>";

			echo "<a href='/Product/update/$product->product_id' class='m-2' id='upd'>Update</a>
                    <a href='/Product/delete/$product->product_id' onclick='return confirm(\"Are you sure?\");' 
					class='m-2' id='del'>Delete</a> </div> </div>";
                }
	
        ?>
		</div>
	</body>
</html>