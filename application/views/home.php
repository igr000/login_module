<!DOCTYPE html>
<!-- Customer Panel-----------------------------------------
------------------------------------------------------------
---- Author: Irene Gayle Roque -----------------------------
----------------------------------------------------------->
<html>
<head>
	<!-- Displays "Home | Welcome Leon Dustin" -->
	<title>Home | Welcome <?php echo $this->session->account_name; ?></title>
</head>
<body>
	<h1>Welcome</h1>
	<?php echo $this->session->account_name; ?> |
	<!-- calls Login controller when clicked -->
	<a href="<?php echo base_url('Logout'); ?>">Log Out</a> <br>
	<em>This page is restricted to unauthorized users. Only logged in users can see/access this page.</em>

</body>
</html>