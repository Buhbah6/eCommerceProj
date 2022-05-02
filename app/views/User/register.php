<html>
	<head>
		<!-- CSS only -->
		<link rel="stylesheet" href="../public/css/register.css">
		<title><?= _("User Registration") ?></title>
	</head>
	<body>
		<div class='container'>

		<h1><?= _("Register you user account") ?></h1>
		<form method='post' action=''>
		<?= _("Username") ?><label class='form-label'><input type='text' name='username' class='form-control' required/></label><br>
		<?= _("Password") ?><label class='form-label'><input type='password' name='password' class='form-control' required/></label><br>
		<?= _("Password confirmation") ?><label class='form-label'><input type='password' name='password_confirm' class='form-control' required/></label><br>
		<?= _("Email") ?><label class='form-label'><input type='email' name='email' class='form-control'required /></label><br>
		<?= _("Contact") ?><label class='form-label'><input type='tel' name='contact' class='form-control' required/></label><br>
			<input type="submit" name='action' value='Register!' class='form-control' />
		</form>
		<div class='signup-link'>
		<?= _("Already have an account? ") ?> <a href="/User/login"><?= _("Login here!") ?></a> <br>
		</div>
		</div>
	</body>
</html>