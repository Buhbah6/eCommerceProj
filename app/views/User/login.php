<html>
	<head>
		<!-- CSS only -->
	<link rel="stylesheet" href="../public/css/login.css">
		<!-- JavaScript Bundle with Popper -->
		<title><?= _("User Login") ?></title>
	</head>
	<body>
		<div class='container'>

		<h1><?= _("Login Account") ?></h1>
		<form method='post' action=''>
			
		<span></span>		
		<?= _("UserName") ?><label class='form-label'><input type='text' name='username'  required /></label>
			
			
				
		<?= _("Password") ?><label class='form-label'><input type='password' name='password' required /></label></span><br>
			
			
			<input type="submit" name='action' value='Login!'  />
			
		</form>
		<div class='signup-link'>
		<?= _("No Account?") ?> <a href="/User/register"><?= _("Register Here!") ?></a> <br>
		</div>
		</div>
	</body>
</html>