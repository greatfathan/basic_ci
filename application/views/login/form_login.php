<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="post" action="<?php echo base_url(); ?>login/auth">
<table>
	<tr>
		<td>Username</td>
		<td>
			<?php echo form_error('username'); ?>
			<input type="text" name="username">
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<?php echo form_error('password'); ?>
			<input type="pasword" name="password">
		</td>
	</tr>
	<tr>
		<td colspan="2">
		<button type="submit">Log In</button>
		</td>
	</tr>
</table>
</form>

</body>
</html>