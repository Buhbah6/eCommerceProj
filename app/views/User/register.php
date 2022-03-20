<html>
	<head>
		<!-- CSS only -->
		<link rel="stylesheet" href="../public/css/register.css">
		<title>User registration</title>
	</head>
	<body>
		<div class='container'>

		<h1>Register your user account</h1>
		<form method='post' action=''>
		Username<label class='form-label'><input type='text' name='username' class='form-control' /></label><br>
		Password<label class='form-label'><input type='password' name='password' class='form-control' /></label><br>
		Password confirmation<label class='form-label'><input type='password' name='password_confirm' class='form-control' /></label><br>
		Email<label class='form-label'><input type='email' name='email' class='form-control' /></label><br>
		Contact<label class='form-label'><input type='tel' name='contact' class='form-control' /></label><br>
			<input type="submit" name='action' value='Register!' class='form-control' />
		</form>
		<div class='signup-link'>
		Already have an account? <a href="/User/login">Login here.</a> <br>
		</div>
		</div>
	</body>
</html>