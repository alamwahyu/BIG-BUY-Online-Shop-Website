<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<style>
		.header {
			background: #f29a7f;
		}
		button[name=register_btn] {
			background: #f29a7f;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	<div class="form">
	<form method="post" action="?module=create_user#pos">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
                <option value="manajer">Manager</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
    </div>
</body>
</html>