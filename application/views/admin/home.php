<!DOCTYPE html>
<!-- Admin Panel -------------------------------------------
------------------------------------------------------------
---- Author: Irene Gayle Roque -----------------------------
----------------------------------------------------------->
<html>
<head>
	<title>Administration Panel</title>
</head>
<body>
	<!-- Displays title of page -->
	<h1><?php echo $title; ?></h1>

	<!-- Displays "Admin" -->
	<?php echo $this->session->account_name; ?> |
	<!-- calls Login controller when clicked -->
	<a href="<?php echo base_url('Logout'); ?>">Log Out</a><br>
	<em>This page is restricted to unauthorized users. Only the Administrator can see/access this page.</em>

</body>
</html>