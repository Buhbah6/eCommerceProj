<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
<div style = "position:absolute;top:100px;right:200px;">
    <ol>
        <?php
            if($data != null){
                foreach($data as $product)
                echo "<li><a href = '/Product/index/' ".$product->product_id.">" .$product->product_name."</a></li>";
            }
        ?>
    </ol>
</div>
</body>
</html>