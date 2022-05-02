<html>
	<head>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title><?= _("Add a product") ?></title>
	</head>
	<body>
		<div class='container'>
			<?php
                $this->view('subviews/navigation');
            ?>

		<h1><?= _("Add a product") ?></h1>
		<form method='post' action=''>
			<label class='form-label'><?= _("Product Name:") ?><input type='text' name='product_name' class='form-control' required /></label><br>
			<label class='form-label'><?= _("Quantity:") ?><input type='number' min="0"' name='available_quantity' class='form-control' required /></label><br>
			<label class='form-label'><?= _("Price:") ?><input type='text' name='price' class='form-control' required /></label><br>
			<label class='form-label'><?= _("Description:") ?>:<textarea cols='55' name='description' class='form-control' required>  </textarea></label><br>
			<label class='form-label'><?= _("Quantity:") ?></label>
            

            <input class="form-check-input" type="radio" name="quality" value="0" checked><label
             class="form-check-label"><?= _("New") ?></label>
             <input class="form-check-input" type="radio" name="quality" value="1" ><label
             class="form-check-label"><?= _("Somewhat used") ?></label>
             <input class="form-check-input" type="radio" name="quality" value="2" ><label
             class="form-check-label"><?= _("Very used") ?></label> <br>

            <label class='form-label' ><?= _("Choose a category:") ?></label>
            <select name="category_id" >
            <?php
                    foreach ($data as $category){
                       echo "<option value=".$category->category_id."> ". $category->name."</option>"; 
                    }

            ?>
            </select>
			<input type="submit" name='action' value='Create!' class='form-control' />
		</form>
		</div>
	</body>
</html>