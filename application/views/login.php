<!DOCTYPE html>
<!--------------------------------------------------------------------------------
-- Login page is the page that contains the login form that will validate --------
-- the user's access. ------------------------------------------------------------
----------------------------------------------------------------------------------
-- Author: Irene Gayle Roque -----------------------------------------------------
--------------------------------------------------------------------------------->
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

	<h1><?php echo $title; ?></h1>
	<!-- Displays form or fields to be filled up in order to log in -->
	<?php

	echo validation_errors();
	echo form_open('login/verify');

	echo form_input('txtuser','','id="txtuser" placeholder="Enter Username"').'<br>';

	echo form_password('txtpass','','id="txtpass" placeholder="Enter Password"').'<br>';

	echo form_submit('btnlogin', 'Log in');

	echo form_close();

	?>

</body>
</html>