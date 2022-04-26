<html>
	<head>
		<!-- CSS only -->
		<link rel="stylesheet" href="../public/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title>Catalog</title>
	</head>
	<body>
		<?php
			$seller = new \app\models\Seller();
            $currentSeller = $seller->get($data->seller_id);
			echo "<div class='card-body'><b>
				<a href='/Product/index/$data->product_id'>$data->product_name</a></b> <br>
				Price: $$data->price <br>
				Description: $data->description <br>
				Sold By: <a href='/Seller/index/$currentSeller->seller_id'>$currentSeller->name</a> <br> <br>";

				if (isset($_SESSION['seller_id']) && $data->seller_id == $_SESSION['seller_id']) {
					echo "<a href='/Product/update/$data->product_id' class='m-2' id='upd'>Update</a>
	                <a href='/Product/delete/$data->product_id' onclick='return confirm(\"Are you sure?\");' 
					class='m-2' id='del'>Delete</a> 
					</div> 
					";
				}else {
					echo "<a href='/Cart/addToCart/$data->product_id'>Add to Cart</a>  <br>";
					echo "<a href='/Wishlist/select/$data->product_id'>Add to a Wishlist</a>| <a href='/Reviews/index/$data->product_id'>Review</a><br> <br> 
					</div> 
					"; 
				}
        ?>
	</body>
</html>