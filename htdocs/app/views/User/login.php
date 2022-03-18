<html>
	<head>
		<!-- CSS only -->
	<link rel="stylesheet" href="../public/css/login.css">
		<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<title>User login</title>
	</head>
	<body>
		<div class='container'>

		<h1>Login Account</h1>
		<form method='post' action=''>
			<div class="txt-field">
			<span></span>	
			<label class='form-label'>Username:<input type='text' name='username'  required /></label><br>
			</div>
			<div class="txt-field">
			<span></span>	
			<label class='form-label'>Password:<input type='password' name='password' required /></label><br>
			</div>
			
			<input type="submit" name='action' value='Login!'  />
			
		</form>
		<div class='signup-link'>
		No account? <a href="/User/register">Register here.</a> <br>
		</div>
		</div>
	</body>
</html>