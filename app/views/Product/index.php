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

		<a href='/Product/sortByPrice' class='m-2' id='upd'>sort by Price</a>
		<a href='/Product/sortByAlphabetically' class='m-2' id='upd'>sort by Alphabetically</a>


		
		<?php
			$seller = new \app\models\Seller();	
          	foreach($data as $product){
	          	$currentSeller = $seller->get($product->seller_id);
				echo "<div class='card m-2'>
				<div class='card-body'>
				<b>$product->product_name</b> <br>
				Price: $$product->price <br>
				Description: $product->description <br>
				Sold By: <a href='/Seller/index/$currentSeller->seller_id'>$currentSeller->name</a> <br> <br>";

				if (isset($_SESSION['seller_id']) && $product->seller_id == $_SESSION['seller_id']) {
				echo "<a href='/Product/update/$product->product_id' class='m-2' id='upd'>Update</a>
	                    <a href='/Product/delete/$product->product_id' onclick='return confirm(\"Are you sure?\");' 
						class='m-2' id='del'>Delete</a> </div> </div>";
				}
				else {
					echo "<a href='/Cart/addToCart/$product->product_id'>Add to Cart</a> <br> </div> </div>";
				}
        }
        $this->view('Subviews/navigation');
	
        ?>
		</div>
	</body>
</html>