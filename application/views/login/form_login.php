<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="post" action="<?php echo base_url(); ?>login/auth">
<table>
	<tr>
		<td colspan="2"><h2><?php echo $this->session->flashdata('pesan_error'); ?></h2> </td>
	</tr>
	<tr>
		<td>Username</td>
		<td>
			<?php 
				/* Tampil error pada field username */
				echo form_error('username'); 
			?>
			<input type="text" name="username">
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<?php 
				/* Tampil error pada field password */
				echo form_error('password'); 
			?>
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