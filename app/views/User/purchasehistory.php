<html>
	<head>
		<!-- CSS only -->
		
		<link rel="stylesheet" href="../public/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title>All Purchases</title>
	</head>
	<body>
		<?php
			$this->view('Subviews/navigation');
		?>
		<div class='products'>
		<h1 id='all'>Purchase History</h1>

		<?php
			$product = new \app\models\Product();
          	foreach($data as $sale){
          		//var_dump($sale);
          		$currentProduct = $product->get($sale->product_id);
				echo "<div class='card m-2'>
						<div class='card-body'><b>
						<a href='/Product/index/$currentProduct->product_id'>$currentProduct->product_name</a></b> <br>
						Date of Purchase: $sale->timestamp <br>
						Quantity Purchased: $sale->quantity<br> <br> </div></div>";
			}	
        ?>
		</div>
	</body>
</html>