<html>
	<head>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<title>User registration</title>
	</head>
	<body>
		<div class='container'>

		<h1>Register your user account</h1>
		<form method='post' action=''>
			<label class='form-label'>Username:<input type='text' name='username' class='form-control' /></label><br>
			<label class='form-label'>Password:<input type='password' name='password' class='form-control' /></label><br>
			<label class='form-label'>Password confirmation:<input type='password' name='password_confirm' class='form-control' /></label><br>
			<label class='form-label'>Email:<input type='email' name='email' class='form-control' /></label><br>
			<label class='form-label'>Contact:<input type='tel' name='contact' class='form-control' /></label><br>
			<input type="submit" name='action' value='Register!' class='form-control' />
		</form>
		Already have an account? <a href="/User/login">Login here.</a> <br>
		</div>
	</body>
</html>