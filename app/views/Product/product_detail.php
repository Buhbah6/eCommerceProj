<html>
	<head>
		<!-- CSS only -->
		<link rel="stylesheet" href="../public/css/home.css">
		<link rel="stylesheet" href="../public/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title><?= _("All Products") ?></title>
	</head>
	<body>
		<div class="container">
            <?php 
                $this->view('Subviews/navigation');
            ?>
			<div class='products'>
			<?php
				
				$seller = new \app\models\Seller();	
          		$seller = $seller->get($data->seller_id);
				echo "<h1 id='all'>$data->product_name</h1>
					<div class='card m-2'> <div class='card-body'>
					". _("Price: ")."$$data->price <br>
					". _("Available Quantity: ")."$data->available_quantity <br>
					". _("Description:")." $data->description <br>
					". _("Sold By: ")."<a href='/Seller/index/$seller->seller_id'>$seller->name</a> <br> <br>";

				if (isset($_SESSION['seller_id']) && $data->seller_id == $_SESSION['seller_id']) {
				echo "<a href='/Product/update/$data->product_id' class='m-2' id='upd'>". _("Update")."</a>
	                    <a href='/Product/delete/$data->product_id' onclick='return confirm(". _("Are you sure") .");'  
						class='m-2' id='del'>".("Delete")."</a> </div> </div>";
				}
				else {
					echo "<a href='/Cart/addToCart/$data->product_id'>". _("Add to Cart")."</a> | <a href='/Wishlist/select/$data->product_id'>". _("Add to a Wishlist")."</a> | <a href='/Reviews/index/$data->product_id'>Review</a><br> </div> </div><br> </div> </div>";
				}

			
        	?>
		</div>
		</div>
	</body>
</html>