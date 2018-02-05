<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" />
	<script type="text/javascript" src="<?php echo base_url ('assets/js/bootstrap.js'); ?>"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
			<h2>Create Account</h2>			
			<form method="post" class="form">
				<p>Last Name: <input type="text" name="UserLastName" /> 
					First Name: <input type="text" name="UserFirstName" /> 
					Middle Name: <input type="text" name="UserMiddleName" /></p>
				<p>Birthdate: <input type="text" name="UserBirthDate" /></p>
				<p>Contact #: <input type="text" name="UserContact" /></p>
				<p>Gender: <input type="text" name="UserGender" /></p>
				<p>Email: <input type="text" name="UserEmail" /></p>
				<p>Password: <input type="Password" name="UserPass" /></p>
				<p><input type="submit" value="submit" /></p>
			</form>
	</div>
</body>
</html>