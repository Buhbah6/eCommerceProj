<html>
<head>
	<!-- CSS only -->
	<link rel="stylesheet" href="../public/css/login.css">
	
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>My Account</title>
</head>
<body>
	<div class='container'>

	<h1>My Account</h1>
	<form method='post' action=''>
	Username<label class='form-label'><input type='text' name='username' value='<?=$data->username ?>' class='form-control' /></label><br>
	Email<label class='form-label'><input type='email' name='email' value= '<?= $data->email ?>' class='form-control' /></label><br>
	Contact<label class='form-label'><input type='text' name='contact' value= '<?= $data->contact ?>' class='form-control' /></label><br>
		<input type="submit" name='action' value='Update!' class='form-control' />
	</form>
		
		
	</div>
</body>
</html>