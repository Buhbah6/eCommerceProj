<html>
	<head>
		<!-- CSS only -->
		
		<link rel="stylesheet" href="../public/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title><?= _("Category") ?></title>
	</head>
	<body>
	    <div class="container">
            <?php 
                $this->view('Subviews/navigation');
            ?>
		    <div class='products'>

            <h1 id='all'><?= _("Products") ?></h1>
            <a href='/Product/sortByPrice' class='m-2' id='upd'><?= _("sort by Price") ?></a>
		    <a href='/Product/sortByNameAlphabetically' class='m-2' id='upd'><?= _("sort Alphabetically") ?></a>
		    <a href='/Product/sortBySeller' class='m-2' id='upd'><?= _("sort by Seller") ?></a>
		    <a href='/Product/sortByCategory' class='m-2' id='upd'><?= _("sort by Category") ?></a>
		    <?php
                foreach($data[0] as $seller){
                    echo "<div class='card m-2'>
                    <div class='card-header'> $seller->name
                    </div>";
                    foreach ($data[1] as $products){
                        foreach($products as $product){
                            if($product->seller_id == $seller->seller_id)
                                $this->view('Product/subviews/sortBy', $product);
                        }
                    } 
				    echo "</div>";  
        	    } 
            ?>
		    </div>
		</div>
	</body>
</html>