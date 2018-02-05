<!DOCTYPE html>
<html>
<head>
	<title>Woooo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" />
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">				
				<table class="table table-striped table-bordered table-hover table-condensed">
					<thead>
						<tr class="bg-info">
							<th>UserID</th>
							<th>Last Name</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>BirthDate</th>
							<th>Contact #</th>
							<th>Gender</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if( isset($profile)){
								foreach ($profile as $prfl) {		
									echo '
										<tr>
											<td>'.$prfl['userid'].'</td>
											<td>'.$prfl['userlastname'].'</td>
											<td>'.$prfl['userfirstname'].'</td>
											<td>'.$prfl['usermiddlename'].'</td>
											<td>'.$prfl['userbirthdate'].'</td>
											<td>'.$prfl['usercontact'].'</td>
											<td>'.$prfl['usergender'].'</td>
											<td>'.$prfl['useremail'].'</td>			
										</tr>
									';
								}
							}
						?>
					</tbody>
				</table>		
				<a href="index.php/Users/create_account/" class="btn btn-xs btn-danger">Sign Up</a>
				<a href="index.php/Users/login_account/" class="btn btn-xs btn-danger">Login</a>		
			</div>
		</div>
	</div>
</body>
</html>