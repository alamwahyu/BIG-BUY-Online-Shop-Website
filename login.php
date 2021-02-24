<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
    <div class="form">
	<form method="post" action="?module=login#pos">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="?module=register#pos">Sign up</a>
		</p>
	</form>
    </div>
</body>
</html>