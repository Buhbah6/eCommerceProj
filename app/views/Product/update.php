<html>
	<head>
		<!-- CSS only -->
        <link rel="stylesheet" href="../public/css/home.css">
			<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title><?= _("Update Product") ?></title>
	</head>
	<body>
		<div class='container'>
            <?php
                $this->view('subviews/navigation');
            ?>

		<h1><?= _("Update a product") ?></h1>
        
		<form method='post' action=''>
			<label class='form-label'><?= _("Product Name:") ?><input type='text' name='product_name' class='form-control' 
            value = '<?=$data[1]->product_name?>'/></label><br>
			<label class='form-label'><?= _("Quantity") ?><input type='number' name='available_quantity' class='form-control'
            value = '<?=$data[1]->available_quantity?>' /></label><br>
			<label class='form-label'><?= _("Price:") ?><input type='text' name='price' class='form-control' 
            value = '<?=$data[1]->price?>'/></label><br>
			<label class='form-label'><?= _("Description:") ?><textarea cols='55' name='description' class='form-control'
            value = '<?=$data[1]->description?>'>  </textarea></label><br>
			<label class='form-label'><?= _("Quality:") ?></label>
            

            <label class='form-label'><?= _("Quality:") ?></label>
                <input class="form-check-input" type="radio" name="quality" value="0" <?= ($data[1]->quality == 0)? "checked" : "" ?> ><label class="form-check-label"><?= _("New") ?></label>
                <input class="form-check-input" type="radio" name="quality" value="1" <?= ($data[1]->quality == 1)? "checked" : "" ?> ><label class="form-check-label"><?= _("somewhat used") ?></label>
                <input class="form-check-input" type="radio" name="quality" value="2" <?= ($data[1]->quality == 2)? "checked" : "" ?> ><label class="form-check-label"><?= _("very used") ?> </label> <br>

            <label class='form-label' ><?= _("Choose a category:") ?></label>
            <?php
                $chooseCategory = new \app\models\Category();
                $chooseCategory = $chooseCategory-> get($data[1]->category_id);
            ?>
            <select name="category_id" value='<?= $chooseCategory->name?>'>
            <?php
                   foreach ($data[0] as $category){
                    if($category->category_id == $data[1]->category_id){
                        echo "<option value='".$category->category_id."' selected>". $category->name ."</option>";

                    } else {
                        echo "<option value='".$category->category_id."'>". $category->name ."</option>";
                    }
                }
            ?>
            </select>
			<input type="submit" name='action' value='Update!' class='form-control' />
		</form>
		</div>
	</body>
</html>